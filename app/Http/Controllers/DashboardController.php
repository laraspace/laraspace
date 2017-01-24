<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;

use Laraspace\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard.basic');
    }

    public function basic()
        
    {
        return view('admin.dashboard.basic');
    }

    public function ecommerce()
    {
        return view('admin.dashboard.ecommerce');
    }

    public function finance()
    {
      return view('admin.dashboard.finance');
    }
}
