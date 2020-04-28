<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crust extends Model
{
    protected $table = 'crust';

    protected $hidden = ['pivot', 'created_at', 'updated_at'];
}
