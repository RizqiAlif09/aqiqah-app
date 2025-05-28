<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        $totalOrders = Order::count();
        $totalPackages = Package::count();
        $totalRevenue = Order::sum('total_price');

        $mostPopularPackage = Order::select('package_id', DB::raw('count(*) as total'))
                                   ->groupBy('package_id')
                                   ->orderByDesc('total')
                                   ->with('package')
                                   ->first();

        return view('admin.dashboard', compact('totalOrders', 'totalPackages', 'totalRevenue', 'mostPopularPackage'));
    }
}