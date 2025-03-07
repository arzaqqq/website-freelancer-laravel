<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;

    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    
    public function experience_user()
    {
        return $this->hasMany(ExperienceUser::class, 'detail_user_id');
    }
    
}
