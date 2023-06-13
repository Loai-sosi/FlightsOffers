<?php

namespace App\Models;

class TRepeatedApplication extends BaseModel

{
    protected $primaryKey = "id";
    protected $table = 'repeated_applications';

    protected $fillable = [
        'applicant_name','applicant_mobile','app_oid','id_num','account_num'
    ];

    public function parent()
    {
        return $this->belongsTo(TComplaint::class,'app_oid');
    }

}
