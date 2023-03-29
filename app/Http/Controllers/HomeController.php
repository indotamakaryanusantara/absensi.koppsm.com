<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->id_roles == 1) {
            return view('pages.superadmin.dashboard');
        } elseif (Auth::user()->id_roles == 2) {
            return view('pages.admin.dashboard');
        } else {
            return view('pages.cabang.dashboard');
        }
    }
}
