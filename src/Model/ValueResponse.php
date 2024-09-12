<?php

namespace MyAnPro\RecitalApi\Model;

class ValueResponse
{
    public function __construct(
        protected string  $origin,
        protected string  $confidence,
        protected string  $status,
        protected string  $nombrePage,
        protected string  $value,
        protected array   $location,
        protected ?string $validPageNb,
        protected ?string $validValue,
        protected ?string $validLocation,
        protected string  $normalizedValueType,
        protected string  $normalizedValue,
        protected ?string $prevalidated,
        protected array   $businessRuleStrings,
    )
    {

    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    public function getConfidence(): string
    {
        return $this->confidence;
    }

    public function setConfidence(string $confidence): void
    {
        $this->confidence = $confidence;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getNombrePage(): string
    {
        return $this->nombrePage;
    }

    public function setNombrePage(string $nombrePage): void
    {
        $this->nombrePage = $nombrePage;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getLocation(): array
    {
        return $this->location;
    }

    public function setLocation(array $location): void
    {
        $this->location = $location;
    }

    public function getValidPageNb(): ?string
    {
        return $this->validPageNb;
    }

    public function setValidPageNb(?string $validPageNb): void
    {
        $this->validPageNb = $validPageNb;
    }

    public function getValidValue(): ?string
    {
        return $this->validValue;
    }

    public function setValidValue(?string $validValue): void
    {
        $this->validValue = $validValue;
    }

    public function getValidLocation(): ?string
    {
        return $this->validLocation;
    }

    public function setValidLocation(?string $validLocation): void
    {
        $this->validLocation = $validLocation;
    }

    public function getNormalizedValueType(): string
    {
        return $this->normalizedValueType;
    }

    public function setNormalizedValueType(string $normalizedValueType): void
    {
        $this->normalizedValueType = $normalizedValueType;
    }

    public function getNormalizedValue(): string
    {
        return $this->normalizedValue;
    }

    public function setNormalizedValue(string $normalizedValue): void
    {
        $this->normalizedValue = $normalizedValue;
    }

    public function getPrevalidated(): ?string
    {
        return $this->prevalidated;
    }

    public function setPrevalidated(?string $prevalidated): void
    {
        $this->prevalidated = $prevalidated;
    }

    public function getBusinessRuleStrings(): array
    {
        return $this->businessRuleStrings;
    }

    public function setBusinessRuleStrings(array $businessRuleStrings): void
    {
        $this->businessRuleStrings = $businessRuleStrings;
    }
}
