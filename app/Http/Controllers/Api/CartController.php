<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\PizzaPrices;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{

    use ApiResponse;

    public function index(Request $request, $uuid)
    {
        $data['cartItems'] = $this->getCartItems($uuid);
        return response()->json($this->successResponse($data), 200);
    }

    public function store(Request $request)
    {
        $message = [
            'pizza_id.unique' => 'Please select pizza',
            'size_id.unique' => 'Please select pizza',
            'crust_id.unique' => 'Please select pizza',
            'quantity.unique' => 'Please select quantity',
        ];
        $validator = Validator::make($request->all(), [
            'pizza_id' => 'required',
            'size_id' => 'required',
            'crust_id' => 'required',
            'quantity' => 'required',
        ], $message);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $data['message'] = $errors->first();
            return response()->json($this->errorResponse($data), 422);
        }
        $cart = new Cart();
        $cart->uuid = $request->uuid;
        $cart->pizza_id = $request->pizza_id;
        $cart->size_id = $request->size_id;
        $cart->crust_id = $request->crust_id;
        $cart->quantity = $request->quantity;
        $cart->save();

        $data['message'] = 'Added successfully to the cart.';
        $data['cartItems'] = $this->getCartItems($request->uuid);
        return response()->json($this->successResponse($data), 200);
    }

    public function update(Request $request, $uuid, $cartId)
    {
        $message = [
            'quantity.unique' => 'Please select quantity',
        ];
        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
        ], $message);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $data['message'] = $errors->first();
            return response()->json($this->errorResponse($data), 422);
        }
        $cart = Cart::where('id', $cartId)->where('uuid', $uuid)->first();
        if ($cart == null) {
            $data['message'] = 'Invalid item to update';
            return response()->json($this->errorResponse($data), 422);
        }
        $cart->quantity = $request->quantity;
        $cart->save();

        $data['message'] = 'Update cart item successfully.';
        $data['cartItems'] = $this->getCartItems($uuid);
        return response()->json($this->successResponse($data), 200);
    }

    public function delete(Request $request, $uuid, $cartId)
    {
        $cart = Cart::where('id', $cartId)->where('uuid', $uuid)->first();
        if ($cart == null) {
            $data['message'] = 'Invalid item to delete';
            return response()->json($this->errorResponse($data), 422);
        }
        $cart->delete();

        $data['message'] = 'Removed from cart.';
        $data['cartItems'] = $this->getCartItems($uuid);
        return response()->json($this->successResponse($data), 200);
    }

    public function getCartItems($uuid)
    {
        $cartItems = Cart::with(['pizza', 'size', 'crust'])->where('uuid', $uuid)->get();
        foreach ($cartItems as $cartItem) {
            $pizzaPrice = PizzaPrices::where('crust_id', $cartItem->crust_id)
                ->where('size_id', $cartItem->size_id)
                ->where('pizza_id', $cartItem->pizza_id)
                ->first();

            if ($pizzaPrice !== null) {
                $cartItem->price = $pizzaPrice->price;
            }
        }
        return $cartItems;
    }
}
