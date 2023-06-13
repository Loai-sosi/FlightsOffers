<?php

namespace App\Models;

class TLocations extends BaseModel

{
    protected $primaryKey = "id";
    protected $table = 'locations';
    protected $fillable = ['id','lat','lon'];

    public $timestamps = false;
}
