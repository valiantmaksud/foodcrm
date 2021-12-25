<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function dashboard()
    {
        $data['today_order']        = Order::whereOrderDate(today())->count();
        $data['yesterday_order']    = Order::whereOrderDate(Carbon::now()->yesterday())->count();
        $data['today_profit']       = Order::whereOrderDate(today())->sum('amount');
        $data['yesterday_profit']   = Order::whereOrderDate(Carbon::now()->yesterday())->sum('amount');
        $data['sales']              = OrderDetail::whereHas('order', function ($query) {
            return $query->orderByDesc('order_date');
        })
            ->with('item')
            ->with('menu')
            ->limit(10)
            ->get();


        return view('backend.dashboard', $data);
    }
}
