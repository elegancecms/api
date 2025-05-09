<?php

namespace EleganceCMS\Api\Http\Requests;

use EleganceCMS\Base\Rules\OnOffRule;
use EleganceCMS\Support\Http\Requests\Request;

class ApiSettingRequest extends Request
{
    public function rules(): array
    {
        return [
            'api_enabled' => [new OnOffRule()],
        ];
    }

    public function bodyParameters(): array
    {
        return [
            'api_enabled' => [
                'description' => 'Enable or disable the API',
                'example' => 'on',
            ],
        ];
    }
}
