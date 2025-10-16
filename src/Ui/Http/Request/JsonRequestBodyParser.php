<?php

declare(strict_types=1);

namespace App\Ui\Http\Request;

use App\Application\Exception\ValidationException;
use Symfony\Component\HttpFoundation\Request;

final class JsonRequestBodyParser
{
    /**
     * @return array<string, mixed>
     */
    public function parse(Request $request, string $rootKey): array
    {
        if (!$request->getContent()) {
            throw new ValidationException(['request body is required']);
        }

        try {
            $data = json_decode($request->getContent(), true, 512, \JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            throw new ValidationException(['invalid JSON payload']);
        }

        if (!\is_array($data) || !isset($data[$rootKey]) || !\is_array($data[$rootKey])) {
            throw new ValidationException(['invalid request payload']);
        }

        return $data[$rootKey];
    }
}
