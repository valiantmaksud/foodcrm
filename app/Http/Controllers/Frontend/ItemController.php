<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index(Request $request)
    {
        return view('frontend.items.items', [
            'menu_items' => Item::with('menu')->where('status', 1)->where('menu_id', $request->menu_id)->get(),
        ]);
    }
}
