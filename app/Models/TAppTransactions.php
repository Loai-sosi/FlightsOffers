<?php

namespace App\Models;

class TAppTransactions extends BaseModel

{
    protected $primaryKey = "oid";
    protected $table = 'app_transactions';

    public $timestamps = false;

}
