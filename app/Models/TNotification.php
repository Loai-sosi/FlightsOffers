<?php

namespace App\Models;


use App\Abstracts\LocalizableModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TNotification extends BaseModel
{

    public function getSTitleAttribute()
    {
        return trans($this->attributes['s_title'], $this->getParams());
    }


    protected function getParams()
    {
        return $this->s_params ? unserialize($this->s_params) : [];
    }


    public function scopeRead(Builder $query)
    {
        return $query->whereNotNull('dt_seen_date');
    }

    public function scopeUnread(Builder $query)
    {
        return $query->whereNull('dt_seen_date');
    }


    public function notifiable()
    {
        return $this->morphTo('notifiable');
    }


    public function sender()
    {
        return $this->belongsTo(TUser::class, 'fk_i_sender_id', 'pk_i_id');
    }
}
