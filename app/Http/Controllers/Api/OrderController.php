<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\OrderDetails;
use App\Models\Orders;
use App\Models\PizzaPrices;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $user = Auth::user();
        $orders = Orders::with(['details'])->where('email', $user->email)->get();
        $data['orders'] = $orders;
        return response()->json($this->successResponse($data), 200);
    }

    public function store(Request $request)
    {
        $orders = new Orders();
        $orders->uuid = $request->uuid;
        $orders->name = $request->name;
        $orders->email = $request->email;
        $orders->phone = $request->phone;
        $orders->address = $request->address;
        $orders->save();

        $cartItems = Cart::where('uuid', $request->uuid)->get();
        $items = 0;
        $total = 0;
        foreach ($cartItems as $cartItem) {
            $pizzaPrice = PizzaPrices::where('crust_id', $cartItem->crust_id)
                ->where('size_id', $cartItem->size_id)
                ->where('pizza_id', $cartItem->pizza_id)
                ->first();

            $orderDetails = new OrderDetails();
            $orderDetails->order_id = $orders->id;
            $orderDetails->pizza_id = $cartItem->pizza_id;
            $orderDetails->size_id = $cartItem->size_id;
            $orderDetails->crust_id = $cartItem->crust_id;
            $orderDetails->quantity = $cartItem->quantity;
            $orderDetails->price = $pizzaPrice->price;
            $orderDetails->save();

            $items += $cartItem->quantity;
            $total += $cartItem->quantity * $pizzaPrice->price;
        }

        $orders->total_items = $items;
        $orders->total_amount = $total;
        $orders->delivery_fee = 2;
        $orders->save();

        Cart::where('uuid', $request->uuid)->delete();

        $data['message'] = 'Order placed successfully.';
        return response()->json($this->successResponse($data), 200);
    }
}
