<?php

namespace MyAnaPro\RecitalApi\Model;

use Illuminate\Support\Carbon;
use Throwable;

class CreateJobResponse
{
    public readonly ?Carbon $createdAt;
    public readonly ?Carbon $updatedAt;

    public function __construct(

        public readonly int     $id,
        ?string                 $createdAt = null,
        ?string                 $updatedAt = null,
        public readonly ?int    $workflowId = null,
        public readonly ?string $workflowName = null,
        public readonly ?int    $stepId = null,
        public readonly ?string $stepName = null,
        public readonly ?int    $index = null,
        public readonly ?array  $data = null,
        public readonly ?string $customMetadata = null,
        public readonly ?bool   $isTest = null,
        public readonly ?string $state = null,
    )
    {
        try {
            $this->createdAt = Carbon::parse($createdAt);
        } catch (Throwable) {
            $this->createdAt = null;
        }

        try {
            $this->updatedAt = Carbon::parse($updatedAt);
        } catch (Throwable) {
            $this->updatedAt = null;
        }
    }
}
