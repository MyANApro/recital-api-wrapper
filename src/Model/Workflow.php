<?php

namespace MyAnPro\RecitalApi\Model;

use Illuminate\Support\Carbon;

class Workflow
{
    public function __construct(
        protected int                $id,
        protected ?int               $originId,
        protected string             $uuid,
        protected Carbon|string      $createdAt,
        protected Carbon|string|null $updatedAt,
        protected ?string            $name,
        protected ?string            $resume,
        protected bool               $valid,
        protected ?string            $status,
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
