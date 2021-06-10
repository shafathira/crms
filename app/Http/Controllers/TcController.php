<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TcController extends Controller
{
    public function dashboard_tc()
    {
        return view('dashboard.dashboard_tc');
    }
}
