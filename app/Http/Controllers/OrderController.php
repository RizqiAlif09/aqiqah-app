<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with(['package', 'nasiBoxPackage'])->orderBy('queue_number', 'asc')->get();
        return view('admin.orders.index', compact('orders'));
    }
}