<?php

declare(strict_types=1);

namespace App\Application\Exception;

final class ValidationException extends ApplicationException
{
    /**
     * @param array<int, string> $messages
     */
    public function __construct(private readonly array $messages)
    {
        parent::__construct('Validation failed', 422);
    }

    /**
     * @return array<int, string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
