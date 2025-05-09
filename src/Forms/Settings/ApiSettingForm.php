<?php

namespace EleganceCMS\Api\Forms\Settings;

use EleganceCMS\Api\Facades\ApiHelper;
use EleganceCMS\Api\Http\Requests\ApiSettingRequest;
use EleganceCMS\Base\Forms\FieldOptions\OnOffFieldOption;
use EleganceCMS\Base\Forms\Fields\OnOffCheckboxField;
use EleganceCMS\Setting\Forms\SettingForm;

class ApiSettingForm extends SettingForm
{
    public function setup(): void
    {
        parent::setup();

        $this
            ->setValidatorClass(ApiSettingRequest::class)
            ->setSectionTitle(trans('packages/api::api.setting_title'))
            ->setSectionDescription(trans('packages/api::api.setting_description'))
            ->contentOnly()
            ->add(
                'api_enabled',
                OnOffCheckboxField::class,
                OnOffFieldOption::make()
                    ->label(trans('packages/api::api.api_enabled'))
                    ->value(ApiHelper::enabled())
                    ->toArray()
            );
    }
}
