<?php

declare(strict_types=1);

namespace App\Application\Exception;

final class UnauthorizedException extends ApplicationException
{
    public function __construct(string $message = 'Unauthorized')
    {
        parent::__construct($message, 401);
    }
}
