<?php

namespace MyAnPro\RecitalApi\Model;

class ValueResponse
{
    public function __construct(
        protected string $origin,
        protected string $confidence,
        protected string $status,
        protected string $page_nb,
        protected string $value,
        protected array $location,
        protected ?string $valid_page_nb,
        protected ?string $valid_value,
        protected ?string $valid_location,
        protected string $normalized_value_type,
        protected string $normalized_value,
        protected ?string $prevalidated,
        protected array $business_rule_strings,
    )
    {

    }
}
