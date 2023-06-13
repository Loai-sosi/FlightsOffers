<?php

namespace App\Models;


class TAdmin extends BaseModel
{

    protected $table = "l_users";
    protected $primaryKey = 'oid';
    public $timestamps = false;
    protected $hidden = ['user_pwd'];

    protected $fillable = [
        'user_full_name',
        'username',
        'user_active',
        'emp_num',
        'user_mobile',
        'address',
        'user_pwd'
    ];

}
