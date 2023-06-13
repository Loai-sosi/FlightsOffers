<?php

namespace App\Traits;


trait Loggable
{
    public function loggable()
    {
        return $this->morphMany(
            'App\Models\TLog',
            'loggable',
            's_loggable_type',
            'fk_i_loggable_id',
            'pk_i_id'
        );
    }

    protected static function booted()
    {
        static::bootCreated();
        static::bootUpdating();
        static::bootDeleted();
    }

    protected static function bootCreated()
    {
        if (auth()->check()) {
            static::created(function ($model) {
                $model->loggable()->create([
                    'fk_i_creator_id' => auth()->id(),
                    's_key' => "NEW_RECORD",
                    's_note' => auth()->user()->s_name. " added ". get_class($model),
                    's_request' => json_encode(app('request')->all()),
                ]);
            });
        }
    }

    protected static function bootUpdating()
    {
        if (auth()->check()) {
            static::updating(function ($model) {
                $model->loggable()->create([
                    'fk_i_creator_id' => auth()->id(),
                    's_key' => "EDIT_RECORD",
                    's_note' => auth()->user()->s_name. " edited ". get_class($model),
                    's_request' => json_encode(app('request')->all()),
                    's_old_data' => json_encode($model->getOriginal())
                ]);
            });
        }
    }

    protected static function bootDeleted()
    {
        if (auth()->check()) {
            static::deleted(function ($model) {
                $model->loggable()->create([
                    'fk_i_creator_id' => auth()->id(),
                    's_key' => "DELETE_RECORD",
                    's_note' => auth()->user()->s_name. " deleted ". get_class($model),
                    's_request' => json_encode(app('request')->all())
                ]);
            });
        }
    }
}
