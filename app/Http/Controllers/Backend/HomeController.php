<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
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
        $data['today_profit']       = $this->calculateProfit();
        $data['yesterday_profit']   = $this->calculateProfit(Carbon::now()->yesterday());
        $data['sales']              = OrderDetail::whereHas('order', function ($query) {
            return $query->orderByDesc('order_date');
        })
            ->with('item')
            ->with('menu')
            ->limit(10)
            ->get();


        return view('backend.dashboard', $data);
    }

    public function calculateProfit($date = null)
    {
        $date = isset($date) ? $date : today();
        $orders = Order::whereOrderDate($date)->with('details')->get();
        $total = 0;
        foreach ($orders as $order) {
            foreach ($order->details as $key => $detail) {
                $item_amount = Item::find($detail->item_id)->item_cost * $detail->quantity;
                $total += $detail->total_price - $item_amount;
            }
        }
        return $total;
    }
}
