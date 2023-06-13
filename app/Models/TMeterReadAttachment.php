<?php

namespace App\Models;

class TMeterReadAttachment extends BaseModel

{
    protected $primaryKey = "id";
    protected $table = 'meter_read_attachments';

    public function fileType()
    {
        return $this->belongsTo(TConstant::class,'file_type_id');
    }

}
