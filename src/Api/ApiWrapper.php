<?php

namespace MyAnPro\RecitalApi\Api;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use MyAnPro\RecitalApi\Exception\RecitalApiWrapperException;
use MyAnPro\RecitalApi\Model\CreateJobResponse;
use MyAnPro\RecitalApi\Model\Workflow;

class ApiWrapper
{
    protected const BASE_URL_STAGING = 'https://staging.workflow.recital.ai/';
    protected const BASE_URL_PRODUCTION = '';
    private string $baseUrl;

    public function __construct(
        protected string $token,
        protected string $mode = "staging",
    )
    {
        $this->baseUrl = static::BASE_URL_STAGING;

        if ($mode === "production") {
            $this->baseUrl = static::BASE_URL_PRODUCTION;
        }
    }

    public function getAllWorkflow(): Collection
    {
        $response = Http::withToken($this->token)
            ->acceptJson()
            ->get($this->baseUrl . 'workflows/api/v1/workflows');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors du listing du workflow', $response->status(), $response->body());
        }

        $listeWorkflow = new Collection();

        foreach ($response->json() as $workflow) {
            $listeWorkflow->push(
                new Workflow(
                    $workflow['id'],
                    $workflow['org_id'],
                    $workflow['uuid'],
                    $workflow['created_at'],
                    $workflow['updated_at'],
                    $workflow['name'],
                    $workflow['summary'],
                    $workflow['valid'],
                    $workflow['status'],
                )
            );
        }

        return $listeWorkflow;
    }

    public function createJob(
        string $content,
        string $webhookUrl,
        string $uuidWorkflow,
    ): CreateJobResponse
    {
        $response = Http::withToken($this->token)
            ->attach('file', $content, 'nomFichier.pdf')
            ->attach('data', json_encode(['ana_webhook_url' => $webhookUrl]), 'data.json')
            ->acceptJson()
            ->withOptions([
                'query' => [
                    'workflow_uuid' => $uuidWorkflow,
                ],
            ])
            ->post($this->baseUrl . 'workflows/api/v1/jobs');

        if (!$response->successful()) {
            throw new RecitalApiWrapperException('Une erreur est survenu lors de la création du job', $response->status(), $response->body());
        }

        $reponse = $response->json();

        return new CreateJobResponse(
            $reponse['id'],
            $reponse['created_at'],
            $reponse['updated_at'],
            $reponse['workflow_id'],
            $reponse['workflow_name'],
            $reponse['step_id'],
            $reponse['step_name'],
            $reponse['index'],
            $reponse['data'],
            $reponse['custom_metadata'],
            $reponse['is_test'],
            $reponse['state'],
        );
    }
}
