<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    protected $guarded = [];
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
