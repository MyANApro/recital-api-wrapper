<?php

namespace MyAnPro\RecitalApi\Model;

use Illuminate\Support\Collection;

class ResultatResponse
{
    protected Collection $valuesResponse;

    public function __construct(
        protected int     $id,
        protected string  $name,
        protected string  $status,
        protected int     $nombrePage,
        protected int     $documentTypeId,
        protected ?string $correctionExterneLien,
        protected ?string $customMetadata,
        protected bool    $isOcrized,
        protected bool    $correctionUser,
        protected array   $groups,
        protected array   $objets,
    )
    {

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getNombrePage(): int
    {
        return $this->nombrePage;
    }

    public function setNombrePage(int $nombrePage): void
    {
        $this->nombrePage = $nombrePage;
    }

    public function getDocumentTypeId(): int
    {
        return $this->documentTypeId;
    }

    public function setDocumentTypeId(int $documentTypeId): void
    {
        $this->documentTypeId = $documentTypeId;
    }

    public function getCorrectionExterneLien(): ?string
    {
        return $this->correctionExterneLien;
    }

    public function setCorrectionExterneLien(?string $correctionExterneLien): void
    {
        $this->correctionExterneLien = $correctionExterneLien;
    }

    public function getCustomMetadata(): ?string
    {
        return $this->customMetadata;
    }

    public function setCustomMetadata(?string $customMetadata): void
    {
        $this->customMetadata = $customMetadata;
    }

    public function isOcrized(): bool
    {
        return $this->isOcrized;
    }

    public function setIsOcrized(bool $isOcrized): void
    {
        $this->isOcrized = $isOcrized;
    }

    public function isCorrectionUser(): bool
    {
        return $this->correctionUser;
    }

    public function setCorrectionUser(bool $correctionUser): void
    {
        $this->correctionUser = $correctionUser;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function setGroups(array $groups): void
    {
        $this->groups = $groups;
    }

    public function getObjets(): array
    {
        return $this->objets;
    }

    public function setObjets(array $objets): void
    {
        $this->objets = $objets;
    }

    public function getValuesResponse(): Collection
    {
        return $this->valuesResponse;
    }

    public function setValuesResponse(Collection $valuesResponse): void
    {
        $this->valuesResponse = $valuesResponse;
    }


}
