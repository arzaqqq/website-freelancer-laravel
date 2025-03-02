<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use softDeletes;

    protected $guarded = [];

    public function order()
    {
        return $this->hasMany(Order::class, 'order_status_id');
    }
}
