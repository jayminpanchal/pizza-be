<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    use ApiResponse;

    public function index()
    {
        $pizzas = Pizza::with(['sizes', 'crusts', 'prices'])->get();
        $data['pizzas'] = $pizzas;
        return response()->json($this->successResponse($data), 200);
    }
}
