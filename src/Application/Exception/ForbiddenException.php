<?php

declare(strict_types=1);

namespace App\Application\Exception;

final class ForbiddenException extends ApplicationException
{
    public function __construct(string $message = 'Forbidden')
    {
        parent::__construct($message, 403);
    }
}
