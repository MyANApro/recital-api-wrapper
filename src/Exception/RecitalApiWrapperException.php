<?php

namespace MyAnPro\RecitalApi\Exception;

use Exception;
use Throwable;

class RecitalApiWrapperException extends Exception
{
    public function __construct(private readonly string $messageCustom, private readonly int $statusResponse, private readonly ?string $responseBody = null, ?Throwable $previous = null)
    {
        parent::__construct($this->messageCustom, 500, $this->previous);
    }

    public function __toString(): string
    {
        try {
            return $this->messageCustom. "\n"
                . "Statut response : " . $this->statusResponse . "\n"
                . "Réponse (API) Recital  : " . json_encode($this->responseBody ?? 'Aucune data Digitall', JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n"
                . parent::__toString();
        } catch (Throwable) {
            return parent::__toString();
        }
    }
}
