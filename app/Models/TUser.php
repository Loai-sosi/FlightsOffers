<?php

namespace App\Models;

use App\Constants\ProfileSteps;
use App\Constants\TaskStatusType;
use App\Traits\Filterable;
use App\Traits\Notifiable;
use Carbon\Carbon;
use Database\Factories\UserFactory;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Notifications\Dispatcher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use DateTimeInterface;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laravel\Sanctum\HasApiTokens;

class TUser extends BaseModel implements AuthenticatableContract
{
    use SoftDeletes, Filterable, Authenticatable, HasApiTokens, HasFactory, Authorizable, Notifiable;

    protected $table = "t_users";
    protected $primaryKey = 'pk_i_id';

    protected $hidden = ['s_password', 'remember_token'];
    protected $appends = ['enabled_html'];
    protected $with = ['avatar'];

    protected $fillable = [
        's_name',
        's_avatar',
        'fk_i_avatar_id',
        's_bio',
        's_site',
        's_phone',
        's_address',
        's_email',
        'b_enable_notification'
    ];

    const CREATED_AT = 'dt_created_date';
    const UPDATED_AT = 'dt_modified_date';
    const DELETED_AT = 'dt_deleted_date';


    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    public function scopeEnabled($query)
    {
        return $query->where('b_enabled', 1);
    }


    public function getAuthPassword()
    {
        return $this->s_password;
    }


    public function setPasswordAttribute($value)
    {
        $this->attributes['s_password'] = $value;
    }

    public function getImageUrlAttribute()
    {
       return $this->s_avatar?
           asset($this->s_avatar):($this->avatar ? asset($this->avatar->s_extra) :'');

    }

    public function setSEmailAttribute($email)
    {
        $this->attributes['s_email'] = strtolower($email);
    }


    public function setSPasswordAttribute($value)
    {
        $this->attributes['s_password'] = bcrypt($value);
    }

    public function avatar()
    {
        return $this->belongsTo(TConstant::class, 'fk_i_avatar_id', 'pk_i_id');
    }


    public function providers()
    {
        return $this->hasMany(TProvider::class, 'fk_i_user_id', 'pk_i_id');
    }

    public function tasks()
    {
        return $this->hasMany(TTask::class, 'fk_i_creator_id', 'pk_i_id');
    }

    public function projects()
    {
        return $this->hasMany(TProject::class, 'fk_i_user_id', 'pk_i_id');
    }

    public function comments()
    {
        return $this->hasMany(TComment::class, 'fk_i_user_id', 'pk_i_id');
    }

    public function attachments()
    {
        return $this->hasMany(TResource::class, 'fk_i_creator_id', 'pk_i_id');
    }


    public function categories()
    {
        return $this->hasMany(TCategory::class, 'fk_i_creator_id', 'pk_i_id');
    }

    public function searchHistory()
    {
        return $this->hasMany(TSearchHistory::class, 'fk_i_creator_id', 'pk_i_id');
    }

    public function contacts()
    {
        return $this->hasMany(TContact::class, 'fk_i_user_id', 'pk_i_id');
    }


    public function routeNotificationForFcm()
    {
        return $this->getDeviceTokens();
    }


    public function devices()
    {
        return $this->hasMany(TUserDevice::class, 'fk_i_user_id', 'pk_i_id');
    }


    public function currentSubscription()
    {
        return $this->hasOne(TUserSubscription::class, 'fk_i_user_id', 'pk_i_id')
            ->whereDate('dt_expiry_date', '>=', Carbon::now())
            ->whereDate('dt_created_date', '<=', Carbon::now())
            ->latestOfMany('pk_i_id', 'subscriptions');
    }


    public function getDeviceTokens()
    {
        return $this->devices()->select('s_pns_token', 's_client_language')->get()->groupBy('s_client_language')->map(function ($item, $key) {
            return $item->map(function ($data) {
                return $data['s_pns_token'];
            })->filter(function ($item) {
                return !empty($item);
            });
        })->toArray();
    }


    public  function getUserTeamIds(){
        $usersIds = [];
        $tasks = TTask::with('team')->where(function ($query){
            $query->where(function ($q) {
                $q->whereHas('team', function ($query) {
                    $query->where('fk_i_user_id', auth()->id());
                })
                    ->orWhere('fk_i_leader_id', auth()->id())
                    ->orWhere('fk_i_creator_id', auth()->id());
            });
        })->get();

        foreach($tasks as $task){
            $usersIds[] = $task->fk_i_leader_id;
            $usersIds[] = $task->fk_i_creator_id;
            $usersIds = array_merge($usersIds,$task->team->pluck('pk_i_id')->toArray());
        }

       return array_unique($usersIds);
    }
    public function notify($instance)
    {
        info('notify');
        if ((int)$this->b_enable_notification) {
            app(Dispatcher::class)->send($this, $instance);
        } else {
            return;
        }
    }

    public function getResourcesCountForTask($id)
    {
        return $this->comments->where('fk_i_task_id',$id)
        ->sum('resources_count');
    }

}
