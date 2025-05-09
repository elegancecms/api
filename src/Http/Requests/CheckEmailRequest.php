<?php

namespace EleganceCMS\Api\Http\Requests;

use EleganceCMS\Support\Http\Requests\Request;

class CheckEmailRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'email' => [
                'description' => 'The email address to check',
                'example' => 'john.smith@example.com',
            ],
        ];
    }
}
