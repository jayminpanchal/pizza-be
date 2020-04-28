<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    public function pizza()
    {
        return $this->belongsTo(Pizza::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function crust()
    {
        return $this->belongsTo(Crust::class);
    }
}
