<?php

namespace MyAnPro\RecitalApi\Model;

use Illuminate\Support\Carbon;

class CreateJobResponse
{
    public function __construct(

        protected int           $id,
        protected Carbon|string $createdAt,
        protected Carbon|string $updatedAt,
        protected int           $workflowId,
        protected ?string       $workflowName,
        protected int           $stepId,
        protected ?string       $stepName,
        protected ?int          $index,
        protected array         $data,
        protected ?string       $customMetadata,
        protected bool          $isTest,
        protected ?string       $state,
    )
    {
        if ($this->createdAt != null && !($createdAt instanceof Carbon)) {
            $this->createdAt = Carbon::parse($this->createdAt);
        }

        if ($this->updatedAt != null && !($updatedAt instanceof Carbon)) {
            $this->updatedAt = Carbon::parse($this->updatedAt);
        }
    }
}
