<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = 'pizza';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];

    public function sizes()
    {
        return $this->belongsToMany(Size::class, PizzaSize::class);
    }

    public function crusts()
    {
        return $this->belongsToMany(Crust::class, PizzaCrust::class);
    }

    public function prices()
    {
        return $this->hasMany(PizzaPrices::class);
    }
}
