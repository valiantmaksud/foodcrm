<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function login()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->route('dashboard');
        }

        return view('admin.login');
    }

    public function handleLogin(Request $req)
    {
        if (Auth::guard('admin')
            ->attempt($req->only(['email', 'password']))
        ) {
            return redirect()
                ->route('dashboard');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('admin')
            ->logout();

        return redirect()
            ->route('admin.login');
    }
}
