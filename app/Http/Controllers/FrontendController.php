<?php

namespace Laraspace\Http\Controllers;

use Illuminate\Http\Request;

use Laraspace\Http\Requests;

class FrontendController extends Controller
{
    public function home()
    {
        return view('front.index');
    }
}
