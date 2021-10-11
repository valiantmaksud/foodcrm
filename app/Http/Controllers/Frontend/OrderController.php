<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontend.users.orders', [
            'orders'    => Order::where('user_id', auth()->id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $order = Order::create([
                'user_id'   => auth()->id(),
                'delivery_address'  => $request->delivery_address,
                'amount'            => $request->amount,
                'total_amount'      => $request->amount,
                'status'            => 'pending',
                'order_date'        => now(),
            ]);
            $carts = Cart::firstWhere('user_id', auth()->id())->get();
            foreach ($carts as $cart) {
                OrderDetail::create([
                    'order_id'  => $order->id,
                    'menu_id'   => $cart->menu_id,
                    'item_id'   => $cart->item_id,
                    'quantity'  => $cart->quantity,
                    'unit_price' => $cart->amount,
                    'total_price' => $cart->amount * $cart->quantity,
                ]);
                $cart->delete();
            }
        });

        return redirect()->route('f.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
