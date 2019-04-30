<?php
namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function home()
    {
        return view('front.index');
    }
}
