<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'cart' => 'required|json', // Cart as JSON string
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Decode cart JSON
        $cart = json_decode($request->cart, true);
        if (empty($cart)) {
            return response()->json([
                'success' => false,
                'message' => 'Cart is empty.'
            ], 400);
        }

        // Calculate total amount
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['qty'] * $item['price'];
        }

        // Create the order
        $order = Order::create([
            'customer_name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'total_amount' => $total,
            'items' => $cart,
            'status' => 'pending'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully!',
            'order_id' => $order->id
        ]);
    }
}
