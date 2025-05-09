<?php

namespace EleganceCMS\Api\Forms;

use EleganceCMS\Api\Http\Requests\StoreSanctumTokenRequest;
use EleganceCMS\Api\Models\PersonalAccessToken;
use EleganceCMS\Base\Forms\FieldOptions\NameFieldOption;
use EleganceCMS\Base\Forms\Fields\TextField;
use EleganceCMS\Base\Forms\FormAbstract;

class SanctumTokenForm extends FormAbstract
{
    public function buildForm(): void
    {
        $this
            ->setupModel(new PersonalAccessToken())
            ->setValidatorClass(StoreSanctumTokenRequest::class)
            ->add('name', TextField::class, NameFieldOption::make()->toArray());
    }
}
