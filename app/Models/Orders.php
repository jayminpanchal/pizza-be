<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $hidden = ['created_at', 'updated_at'];

    public function details()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id')->with(['pizza', 'crust', 'size']);
    }
}
