<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoorController extends Controller
{
    public function dashboard_coordinator()
    {
        return view('dashboard.dashboard_coor');
    }
}
