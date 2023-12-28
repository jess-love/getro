<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ConfirmationController extends Controller
{
    public function show()
    {
        $order_key = session('order_key');
        $order = Order::where('order_id_generate', $order_key)->firstOrFail();
        return view('confirmation', compact('order'));
    }
}
