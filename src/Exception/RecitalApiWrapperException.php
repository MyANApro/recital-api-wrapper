<?php

namespace MyAnaPro\RecitalApi\Exception;

use Exception;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Stringable;
use Throwable;

class RecitalApiWrapperException extends Exception
{
    public function __construct(
        private readonly string $messageCustom,
        private readonly Response $response,
        ?Throwable $previous = null
    ) {
        parent::__construct($this->messageCustom, 500, $previous);
    }

    public function __toString(): string
    {
        try {
            return (new Stringable())
                ->append($this->messageCustom)
                ->newLine()
                ->append("Statut response : ", $this->response->status())
                ->newLine()
                ->append("Réponse (API) Recital  : ", json_encode($this->response->body() ?? '[Response empty !]', JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))
                ->newLine()
                ->append(parent::__toString())
                ->toString();
        } catch (Throwable) {
            return parent::__toString();
        }
    }

    public function getRecitalResponse(): Response
    {
        return $this->response;
    }
}
