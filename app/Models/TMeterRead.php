<?php

namespace App\Models;

class TMeterRead extends BaseModel

{
    protected $primaryKey = "id";
    protected $table = 'meter_reads';

    protected $fillable = ['name','mobile','account_no','meter','user_id'];

    public function attachments()
    {
        return $this->hasMany(TMeterReadAttachment::class,'meter_read_id');
    }
}
