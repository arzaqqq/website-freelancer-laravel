<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperienceUser extends Model
{
    use softDeletes;
    protected $guarded = [];

    public function detail_user()
    {
        return $this->belongsTo(DetailUser::class, 'detail_user_id' ,'id');
    }
}
