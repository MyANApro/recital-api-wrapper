<?php

namespace MyaAnPro\RecitalApi\Model;

use Illuminate\Support\Carbon;
use Throwable;

class CreateJobResponse
{
    public readonly Carbon $createdAt;
    public readonly ?Carbon $updatedAt;

    public function __construct(

        public readonly int $id,
        string $createdAt,
        ?string $updatedAt,
        public readonly int $workflowId,
        public readonly ?string $workflowName,
        public readonly ?int $stepId,
        public readonly ?string $stepName,
        public readonly ?int $index,
        public readonly ?array $data,
        public readonly ?string $customMetadata,
        public readonly bool $isTest,
        public readonly ?string $state,

    ) {
        $this->createdAt = Carbon::parse($createdAt);
        try {
            $this->updatedAt = Carbon::parse($updatedAt);
        } catch (Throwable) {
            $this->updatedAt = null;
        }
    }
}
