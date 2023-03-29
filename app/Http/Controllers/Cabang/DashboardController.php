<?php

namespace App\Http\Controllers\Cabang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.cabang.dashboard');
    }
}
