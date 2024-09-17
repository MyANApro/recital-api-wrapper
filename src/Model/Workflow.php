<?php

namespace MyAnaPro\RecitalApi\Model;

use Illuminate\Support\Carbon;
use Throwable;

class Workflow
{
    public readonly ?Carbon $createdAt;
    public readonly ?Carbon $updatedAt;

    /**
     * Attributes `$draftId` and `$revisions` are always null unless constructed from workflow listing by UUID
     *
     * @see \MyAnaPro\RecitalApi\Api\ApiWrapper::getAllWorkflow()
     * @see \MyAnaPro\RecitalApi\Api\ApiWrapper::getAllWorkflowsByUuid()
     */
    public function __construct(
        public readonly int     $id,
        public readonly string  $uuid,
        public readonly string  $name,
        public readonly ?int    $orgId = null,
        ?string                 $createdAt = null,
        ?string                 $updatedAt = null,
        public readonly ?string $summary = null,
        public readonly ?bool   $valid = null,
        public readonly ?string $status = null,
        public readonly ?int    $draftId = null,
        public readonly ?int    $revisions = null,
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
