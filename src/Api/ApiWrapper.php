<?php

namespace MyaAnPro\RecitalApi\Api;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use MyaAnPro\RecitalApi\Exception\RecitalApiWrapperException;
use MyaAnPro\RecitalApi\Model\CreateJobResponse;
use MyaAnPro\RecitalApi\Model\Workflow;

class ApiWrapper
{
    protected const BASE_URL_STAGING    = 'https://staging.workflow.recital.ai';
    protected const BASE_URL_PRODUCTION = 'https://extract.workflows.recital.ai';
    private string $baseUrl;

    public function __construct(
        protected string $token,
        protected bool $production = false,
    ) {
        $this->baseUrl = static::BASE_URL_STAGING;

        if ($production) {
            $this->baseUrl = static::BASE_URL_PRODUCTION;
        }
    }

    protected function newClient(): PendingRequest
    {
        return Http::withToken($this->token)
            ->baseUrl($this->baseUrl)
            ->acceptJson()
            ->connectTimeout(2)
            ->timeout(5);
    }

    /**
     * @throws \MyaAnPro\RecitalApi\Exception\RecitalApiWrapperException
     */
    public function getAllWorkflow(): Collection
    {
        $response = $this->newClient()->get('workflows/api/v1/workflows');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors du listing du workflow', $response);
        }

        $listeWorkflow = new Collection();
        foreach ($response->json(default: []) as $workflow) {
            $listeWorkflow->push(
                new Workflow(
                    id: $workflow['id'],
                    orgId: $workflow['org_id'],
                    uuid: $workflow['uuid'],
                    createdAt: $workflow['created_at'],
                    updatedAt: $workflow['updated_at'],
                    name: $workflow['name'],
                    summary: $workflow['summary'],
                    valid: $workflow['valid'],
                    status: $workflow['status'],
                )
            );
        }

        return $listeWorkflow;
    }

    /**
     * @throws \MyaAnPro\RecitalApi\Exception\RecitalApiWrapperException
     */
    public function getAllWorkflowsByUuid(): Collection
    {
        $response = $this->newClient()->get('workflows/api/v1/workflows/by-uuid');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors du listing du workflow par UUID', $response);
        }

        $listeWorkflow = new Collection();
        foreach ($response->json() as $workflow) {
            $listeWorkflow->push(
                new Workflow(
                    id: $workflow['id'],
                    orgId: $workflow['org_id'],
                    uuid: $workflow['uuid'],
                    createdAt: $workflow['created_at'],
                    updatedAt: $workflow['updated_at'],
                    name: $workflow['name'],
                    summary: $workflow['summary'],
                    valid: $workflow['valid'],
                    status: $workflow['status'],
                    draftId: $workflow['draft_id'],
                    revisions: $workflow['revisions'],
                )
            );
        }

        return $listeWorkflow;
    }

    /**
     * @throws \MyaAnPro\RecitalApi\Exception\RecitalApiWrapperException
     */
    public function createJob(
        string $content,
        string $webhookUrl,
        string $uuidWorkflow,
    ): CreateJobResponse {
        $response = $this->newClient()
            ->attach('file', $content, 'nomFichier.pdf')
            ->attach('data', json_encode(['ana_webhook_url' => $webhookUrl]), 'data.json')
            ->withOptions(['query' => ['workflow_uuid' => $uuidWorkflow]])
            ->post('workflows/api/v1/jobs');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors de la création du job', $response);
        }

        $responseData = $response->json();

        return new CreateJobResponse(
            id: $responseData['id'],
            createdAt: $responseData['created_at'],
            updatedAt: $responseData['updated_at'],
            workflowId: $responseData['workflow_id'],
            workflowName: $responseData['workflow_name'],
            stepId: $responseData['step_id'],
            stepName: $responseData['step_name'],
            index: $responseData['index'],
            data: $responseData['data'],
            customMetadata: $responseData['custom_metadata'],
            isTest: $responseData['is_test'],
            state: $responseData['state'],
        );
    }
}
