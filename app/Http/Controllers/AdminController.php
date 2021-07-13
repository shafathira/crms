<?php

namespace App\Http\Controllers;

use App\Models\MyRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard_admin(){
        return view('dashboard.dashboard_admin');
    }

}
