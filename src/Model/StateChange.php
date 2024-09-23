<?php

namespace MyAnaPro\RecitalApi\Model;

class StateChange
{
    /**
     * @param array<\MyAnaPro\RecitalApi\Model\DataPointValue> $values
     */
    public function __construct(
        public readonly ?int              $id,
        public readonly string            $event,
        public readonly string            $service,
        public readonly string            $installation,
        public readonly int               $organization,
        public readonly Workflow          $workflow,
        public readonly Step              $step,
        public readonly CreateJobResponse $job,
    )
    {
    }
}
