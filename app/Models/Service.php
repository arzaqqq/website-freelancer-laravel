<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // hasMany
    public function advantage_user() 
    {
        return $this->hasMany(AdvantageUser::class, 'service_id');
    }
    public function thumbnail_service() 
    {
        return $this->hasMany(ThumbnailService::class, 'service_id');
    }
    public function tagline()
    {
        return $this->hasMany(Tagline::class, 'service_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'service_id');
    }


}
