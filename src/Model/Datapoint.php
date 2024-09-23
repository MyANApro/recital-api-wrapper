<?php

namespace MyAnaPro\RecitalApi\Model;

class Datapoint
{
    public function __construct(
        public readonly int            $dataPointId,
        public readonly string         $dataPointName,
        public readonly DataPointValue $dataPointValue,
        public readonly mixed          $position,
        public readonly mixed          $intermediate,
    ) {
    }
}
