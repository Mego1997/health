<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    // public function index()
    // {
    //     return view('home');
    // }
    
    public function managerDashboard()
    {
        return view('manager_dashboard.home');
    }

    public function superAdminDashboard()
    {
        return view('admin_dashboard.home');
    }
}
