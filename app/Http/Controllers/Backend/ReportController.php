<?php

namespace App\Http\Controllers\Backend;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;

class ReportController extends Controller
{
    public function saleReport(Request $request)
    {
        // dd($request->all());
        // return
        $data['items'] = Item::whereHas('order_details', function ($query) use ($request) {
            return $query->whereHas('order', function ($query) use ($request) {
                $query->when($request->filled('from'), function ($q) use ($request) {
                    // dd($request->from);
                    return $q->where('order_date', '>=', $request->from);
                })
                    ->when($request->filled('to'), function ($q) use ($request) {
                        return $q->where('order_date', '<=', $request->to);
                    })
                    ->orderByDesc('order_date');
            });
        })
            // ->with('order_details.order')
            ->when($request->filled('item_name'), function ($query) use ($request) {
                return $query->where('name', $request->item_name);
            })
            ->get();


        return view('backend.report.sales-copy', $data);
    }
}
