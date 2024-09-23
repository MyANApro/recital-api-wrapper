<?php

namespace MyAnaPro\RecitalApi\Model;

class DataPointValue
{
    public function __construct(
        public readonly string $origin,
        public readonly float $confidence,
        public readonly string $status,
        public readonly ?int $nombrePage,
        public readonly ?string $value,
        public readonly ?array $location,
        public readonly ?int $validPageNb,
        public readonly ?string $validValue,
        public readonly ?array $validLocation,
        public readonly ?string $normalizedValueType,
        public readonly ?string $normalizedValue,
        // TODO ask for possible types
        public readonly mixed $prevalidated,
        public readonly ?array $businessRuleStrings,
    ) {
    }
}
