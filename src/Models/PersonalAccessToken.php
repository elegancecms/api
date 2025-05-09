<?php

namespace EleganceCMS\Api\Models;

use EleganceCMS\Base\Contracts\BaseModel;
use EleganceCMS\Base\Models\Concerns\HasBaseEloquentBuilder;
use EleganceCMS\Base\Models\Concerns\HasMetadata;
use EleganceCMS\Base\Models\Concerns\HasUuidsOrIntegerIds;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken implements BaseModel
{
    use HasMetadata;
    use HasUuidsOrIntegerIds;
    use HasBaseEloquentBuilder;
}
