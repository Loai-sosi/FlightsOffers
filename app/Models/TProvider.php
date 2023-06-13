<?php

namespace App\Models;


class TProvider extends BaseModel
{
    protected $fillable = [
        's_provider',
        's_provider_id',
        'fk_i_user_id',
        's_avatar'
    ];

    protected $hidden = ['dt_created_date', 'dt_modified_date'];
}
