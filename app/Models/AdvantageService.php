<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageService extends Model
{
    use softDeletes;
    protected $guarded = [];
}
