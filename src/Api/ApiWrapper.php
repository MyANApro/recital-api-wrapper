<?php

namespace MyAnaPro\RecitalApi\Api;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use MyAnaPro\RecitalApi\Exception\RecitalApiWrapperException;
use MyAnaPro\RecitalApi\Model\CreateJobResponse;
use MyAnaPro\RecitalApi\Model\Workflow;
use Throwable;

class ApiWrapper
{
    protected const BASE_URL_STAGING    = 'https://staging.workflow.recital.ai';
    protected const BASE_URL_PRODUCTION = 'https://extract.workflows.recital.ai';
    private string $baseUrl;

    public function __construct(
        protected string $token,
        protected bool $production = false,
        protected $timeout = 5,
        protected $connectTimeout = 10,
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
            ->timeout($this->timeout)
            ->connectTimeout($this->connectTimeout);
    }

    /**
     * @return array{Collection, Response}
     * @throws \MyAnaPro\RecitalApi\Exception\RecitalApiWrapperException
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function getAllWorkflow(): array
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

        return [$listeWorkflow, $response];
    }

    /**
     * @return array{Collection, Response}
     * @throws \Illuminate\Http\Client\ConnectionException
     * @throws \MyAnaPro\RecitalApi\Exception\RecitalApiWrapperException
     */
    public function getAllWorkflowsByUuid(): array
    {
        $response = $this->newClient()->get('workflows/api/v1/workflows/by-uuid');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors du listing du workflow par UUID', $response);
        }

        try {
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
                        draftId: $workflow['draft_id'],
                        revisions: $workflow['revisions'],
                    )
                );
            }
        } catch (Throwable $e) {
            throw new RecitalApiWrapperException("Impossible de construire un objet `Workflow` depuis la réponse Recital", $response, $e);
        }

        return [$listeWorkflow, $response];
    }

    /**
     * @return array{CreateJobResponse, Response}
     * @throws \MyAnaPro\RecitalApi\Exception\RecitalApiWrapperException
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function createJob(
        string $content,
        string $uuidWorkflow,
        string $stepWebhookUrl,
        string $jobWebhookUrl,
    ): array {
        $internalJobUuid = Str::uuid();

        $response = $this->newClient()
            ->attach('file', $content, 'nomFichier.pdf')
            ->attach('data', json_encode(['ana_webhook_url' => $stepWebhookUrl]), 'data.json')
            ->withOptions([
                'query' => [
                    'workflow_uuid'   => $uuidWorkflow,
                    'custom_metadata' => ['internal_job_uuid' => $internalJobUuid],
                    'webhook_url'     => $jobWebhookUrl,
                ],
            ])
            ->post('workflows/api/v1/jobs');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors de la création du job', $response);
        }

        $responseData = $response->json();

        try {
            $jobResponse = new CreateJobResponse(
                id: $responseData['id'],
                createdAt: $responseData['created_at'],
                updatedAt: $responseData['updated_at'] ?? null,
                workflowId: $responseData['workflow_id'],
                workflowName: $responseData['workflow_name'] ?? null,
                stepId: $responseData['step_id'] ?? null,
                stepName: $responseData['step_name'] ?? null,
                index: $responseData['index'] ?? null,
                data: $responseData['data'] ?? null,
                customMetadata: $responseData['custom_metadata'] ?? null,
                isTest: $responseData['is_test'],
                state: $responseData['state'] ?? null,
            );

            return [$jobResponse, $response];
        } catch (Throwable $e) {
            throw new RecitalApiWrapperException("Impossible de construire un objet `CreateJobResponse` depuis la réponse Recital", $response, $e);
        }
    }
}
