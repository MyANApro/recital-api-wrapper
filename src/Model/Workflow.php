<?php

namespace MyaAnPro\RecitalApi\Model;

use Illuminate\Support\Carbon;
use Throwable;

class Workflow
{
    public readonly Carbon $createdAt;
    public readonly ?Carbon $updatedAt;

    /**
     * Attributes $draftId and $revisions are always null unless constructed from workflow listing by UUID
     *
     * @see \MyaAnPro\RecitalApi\Api\ApiWrapper::getAllWorkflow()
     * @see \MyaAnPro\RecitalApi\Api\ApiWrapper::getAllWorkflowsByUuid()
     */
    public function __construct(
        public readonly int $id,
        public readonly ?int $orgId,
        public readonly string $uuid,
        string $createdAt,
        ?string $updatedAt,
        public readonly string $name,
        public readonly ?string $summary,
        public readonly bool $valid,
        public readonly string $status,
        public readonly ?int $draftId = null,
        public readonly ?int $revisions = null,

    ) {
        $this->createdAt = Carbon::parse($createdAt);
        try {
            $this->updatedAt = Carbon::parse($updatedAt);
        } catch (Throwable) {
            $this->updatedAt = null;
        }
    }
}
