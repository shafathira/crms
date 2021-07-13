<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\MyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoorController extends Controller
{
    public function dashboard_coordinator()
    {
        return view('dashboard.dashboard_coor');
    }

    public function index()
    {
        $myRequests=MyRequest::where('Coor_id',Auth::id())->get();
        return view('coor_req', compact('myRequests'));
    }

    public function notcoor()
    {
        $myRequests=MyRequest::where('Coor_id','!=',Auth::id())->get();
        return view('notcoor_req', compact('myRequests'));
    }
}
