<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard.profile');
    }

    public function dashboardBusiness(){
        return view('dashboard.dashboard-business');
    }

    public function dashboardUser(){
        return view('dashboard.dashboard-user');
    }
}
