<?php

namespace App\Models;

class TAppSubType extends BaseModel

{
    protected $primaryKey = "oid";
    protected $table = 'app_sub_types';

    public $timestamps = false;

    public function parent()
    {
        return $this->belongsTo(TAppSubType::class,'parent_oid');
    }
}
