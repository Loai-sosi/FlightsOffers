<?php


namespace App\Models;

use App\Traits\Filterable;
use App\Traits\PaginatableSizeByOrder;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use Filterable, PaginatableSizeByOrder, HasFactory;

//    protected $primaryKey = "id";
//    protected $guarded = ['pk_i_id','dt_created_date','dt_modified_date','dt_deleted_date'];

//    const CREATED_AT = 'dt_created_date';
//    const UPDATED_AT = 'dt_modified_date';
//    const DELETED_AT = 'dt_deleted_date';


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


//    public function scopeEnabled($query)
//    {
//        $query->where('b_enabled', 1);
//    }

//    public function getEnabledHtmlAttribute()
//    {
//        return '<span class="kt-switch kt-switch--icon kt-switch--sm">
//                    <label>
//                        <input type="checkbox" data-id="' . $this->getKey() . '" name="status" class="js-switch"' . ($this->b_enabled == 1 ? 'checked' : '') . ">
//                        <span></span>
//                	</label>
//				</span>";
//    }

}
