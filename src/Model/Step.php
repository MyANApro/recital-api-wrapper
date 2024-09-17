<?php

namespace MyAnaPro\RecitalApi\Model;

class Step
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {
    }
}
