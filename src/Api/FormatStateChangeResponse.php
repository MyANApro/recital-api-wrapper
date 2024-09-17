<?php

namespace MyAnaPro\RecitalApi\Api;

use MyAnaPro\RecitalApi\Model\CreateJobResponse;
use MyAnaPro\RecitalApi\Model\StateChange;
use MyAnaPro\RecitalApi\Model\Step;
use MyAnaPro\RecitalApi\Model\Workflow;

class FormatStateChangeResponse
{
    public static function formatStepWebhookResponse(array $response): StateChange
    {
        $workflow = new Workflow(
            id: $response['workflow']['id'],
            uuid: $response['workflow']['uuid'],
            name: $response['workflow']['name'],
        );

        $step = new Step(
            id: $response['step']['id'],
            name: $response['step']['name'],
        );

        $job = new CreateJobResponse(
            id: $response['job']['id'],
            state: $response['job']['state'],
            data: $response['job']['data'],
        );


        return new StateChange(
            id: $response["id"],
            event: $response["event"],
            service: $response["service"],
            installation: $response["installation"],
            organization: $response["organization"],
            workflow: $workflow,
            step: $step,
            job: $job,
        );
    }
}
