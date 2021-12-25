<?php

namespace App\Http\Controllers\Backend;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function saleReport(Request $request)
    {
        // dd($request->all());
        $data['sales'] = OrderDetail::whereHas('order', function ($query) use ($request) {
            $query->when($request->filled('from'), function ($q) use ($request) {
                $q->where('order_date', '>=', $request->from);
            })
                ->when($request->filled('to'), function ($q) use ($request) {
                    $q->where('order_date', '<=', $request->to);
                })
                ->orderByDesc('order_date');
        })
            ->whereHas('item', function ($query) use ($request) {
                return $query->when($request->filled('item_name'), function ($q) use ($request) {
                    return $q->where('name', $request->item_name);
                });
            })
            ->with('menu')
            ->paginate(25);


        return view('backend.report.sales', $data);
    }
}
