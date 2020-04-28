<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PizzaCrust extends Model
{
    protected $table = 'pizza_crust';
    protected $hidden = [ 'created_at', 'updated_at'];
}
