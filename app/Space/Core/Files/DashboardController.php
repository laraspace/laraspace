<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;

use Laraspace\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.basic');
    }

}
