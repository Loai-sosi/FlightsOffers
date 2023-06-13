<?php

namespace App\Models;


use Laravel\Sanctum\PersonalAccessToken;

class TPersonalAccessToken extends PersonalAccessToken
{
    protected $table = 'personal_access_tokens';

    public function device()
    {
        return $this->hasOne(TUserDevice::class, 'fk_i_token_id', 'id');
    }
}
