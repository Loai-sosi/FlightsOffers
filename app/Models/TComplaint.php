<?php

namespace App\Models;

class TComplaint extends BaseModel

{
    protected $primaryKey = "oid";
    protected $table = 'applications';

    public $timestamps = false;


    protected $fillable = [
        'app_num', 'app_year', 'app_date',
        'app_type_oid', 'notes', 'app_title', 'user_oid', 'deleted', 'emp_name', 'emp_num', 'sub_type_oid', 'parent_oid',
        'street_num', 'build_num', 'app_desc', 'app_file', 'account_num', 'bill_num', 'block_num', 'parcel_num',
        'id_num', 'applicant_name', 'new_num', 'new_year',
        'mobile_num', 'app_source_oid', 'address_desc', 'quarter_oid', 'region_oid', 'mobile_hidden',
        'geo_oid', 'print_date', 'typical_copy', 'crafts_count', 'location_id', 'longitude', 'latitude',
    ];

    public function attachments()
    {
        return $this->hasMany(TComplaintAttaches::class,'app_oid');
    }

    public function transactions()
    {
        return $this->hasMany(TAppTransactions::class,'app_oid');
    }

    public function lastTransaction()
    {
        return $this->hasOne(TAppTransactions::class,'app_oid')->latest();
    }

    public function creator()
    {
        return $this->belongsTo(TAdmin::class,'user_oid');
    }

}
