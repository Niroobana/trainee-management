<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function index()
    {
        return view('admin.admindashboard');
        switch(Auth::user()->role_id){
                case '1':
                return view('layouts.admin.sidebar.adminsidebar');
                    break;
                case '2':
                return view('layouts.admin.sidebar.coordinatorsidebar');
                    break;
                case '3':
                return view('layouts.admin.sidebar.resourcesidebar');
                    break;

             }
            }

}
