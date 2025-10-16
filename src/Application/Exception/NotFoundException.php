<?php

declare(strict_types=1);

namespace App\Application\Exception;

final class NotFoundException extends ApplicationException
{
    public function __construct(string $message = 'Resource not found')
    {
        parent::__construct($message, 404);
    }
}
