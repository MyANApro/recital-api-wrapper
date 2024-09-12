<?php

namespace MyaAnPro\RecitalApi\Model;

class Extract
{
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
        /** @param array<\MyaAnPro\RecitalApi\Model\Value> $values */
        public readonly array $values,
    ) {
    }
}
