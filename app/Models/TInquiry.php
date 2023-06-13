<?php

namespace App\Models;

class TInquiry extends BaseModel

{
    protected $primaryKey = "id";
    protected $table = 'inquiries';

    protected $fillable = [
        'applicant_name','applicant_mobile','type_id','user_id','type','status','description'
    ];

    public function creator()
    {
        return $this->belongsTo(TAdmin::class,'user_id');
    }

    public function subType()
    {
        return $this->belongsTo(TAppSubType::class,'type_id');
    }
}
