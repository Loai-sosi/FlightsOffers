<?php

namespace App\Models;

class TComplaintAttaches extends BaseModel

{
    protected $table = 'app_attaches';
    protected $primaryKey = "oid";
    public $timestamps = false;
    protected $fillable = [
        'att_name','att_type_oid','app_oid','att_file','att_user','att_date'
    ];

    public function fileType()
    {
        return $this->belongsTo(TConstant::class,'att_type_oid');
    }

}
