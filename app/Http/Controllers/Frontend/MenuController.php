<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{



    public function index()
    {
        return view('frontend.menus', [
            'menus' => Menu::withCount('items')->where('status', 1)->get(),
        ]);
    }
}
