<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PizzaPrices extends Model
{
    protected $table = 'pizza_prices';
    protected $hidden = [ 'created_at', 'updated_at'];
}
