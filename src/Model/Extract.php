<?php

namespace MyAnaPro\RecitalApi\Model;

class Extract
{
    /**
     * @param array<\MyAnaPro\RecitalApi\Model\Value> $values
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $status,
        public readonly int $nombrePage,
        public readonly int $documentTypeId,
        public readonly ?string $correctionExterneLien,
        public readonly ?string $customMetadata,
        public readonly bool $isOcrized,
        public readonly bool $correctionUser,
        public readonly array $groups,
        public readonly array $objets,
        public readonly array $values,
    ) {
    }
}
