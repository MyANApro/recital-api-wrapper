<?php

namespace MyAnPro\RecitalApi\Api;

use Illuminate\Support\Facades\Http;

class ApiWrapper
{
    protected const BASE_URL_STAGING    = 'https://staging.workflow.recital.ai/';
    protected const BASE_URL_PRODUCTION = '';
    private string $baseUrl;

    public function __construct(
        protected string $token,
        protected string $mode = "staging",
    ) {
        $this->baseUrl = static::BASE_URL_STAGING;

        if ($mode !== "staging") {
            $this->baseUrl = static::BASE_URL_PRODUCTION;
        }
    }

    public function createJob(
        string $content,
        string $webhookUrl,
        string|array|null $customMetadata = null,
    ) {
        $uuid = '1058a05b-b94c-42e6-9ac9-e05dc600be66';

        $response = Http::withToken($this->token)
            ->attach('file', $content, 'nomFichier.pdf')
            ->attach('data', json_encode(['ana_webhook_url' => 'https://toto.toto'], JSON_FORCE_OBJECT ))
            // ->contentType('multipart/form-data')
            ->acceptJson()
            ->withOptions([
                'query' => [
                    'workflow_uuid' => $uuid,
                ],
            ])
            // ->dd()
            ->post($this->baseUrl . 'workflows/api/v1/jobs'
                // , [
                //     'data' => [
                //         //     json_encode(['ana_webhook_url' => 'https://toto.toto']),
                //         'name'     => 'ana_webhook_url',
                //         'contents' => 'https://toto.toto',
                //     ],
                // ]
            );
        dd($response->body());

        return $response;
    }
}
