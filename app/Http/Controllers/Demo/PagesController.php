<?php

namespace Laraspace\Http\Controllers\Demo;

use Illuminate\Http\Request;

use Laraspace\Http\Requests;
use Laraspace\Http\Controllers\Controller;

class PagesController extends Controller
{
    //Layouts
    public function sidebarLayout()
    {
        return view('admin.pages.layouts.sidebar');
    }

    public function iconSidebar()
    {
        return view('admin.pages.layouts.icon-sidebar');
    }

    public function horizontalMenu()
    {
        return view('admin.pages.layouts.horizontal-menu');
    }
    

    //Basic UI
    public function buttons()
    {
        return view('admin.pages.basic.buttons');
    }

    public function typography()
    {
        return view('admin.pages.basic.typography');
    }

    public function tabs()
    {
        return view('admin.pages.basic.tabs');
    }

    public function cards()
    {
        return view('admin.pages.basic.cards');
    }

    public function tables()
    {
        return view('admin.pages.basic.tables');
    }

    public function modals()
    {
        return view('admin.pages.basic.modals');
    }

    //Components

    public function notifications()
    {
        return view('admin.pages.components.notifications');
    }

    public function graphs()
    {
        return view('admin.pages.components.graphs');
    }

    public function datatables()
    {
        return view('admin.pages.components.datatables');
    }

    // Forms

    public function general()
    {
        return view('admin.pages.forms.general');
    }

    public function advanced()
    {
        return view('admin.pages.forms.advanced');
    }

    public function layouts()
    {
        return view('admin.pages.forms.layouts');
    }

    public function validation()
    {
        return view('admin.pages.forms.validation');
    }

    public function editors()
    {
        return view('admin.pages.forms.editors');
    }
    
    // Login
    public function loginSimple()
    {
        return view('admin.sessions.login-simple');
    }

    //icons
    public function icoMoons()
    {
        return view('admin.pages.icons.ico-moon');
    }
    public function evilIcons()
    {
        return view('admin.pages.icons.evil-icon');
    }
    public function meteoconsIcons()
    {
        return view('admin.pages.icons.meteocons');
    }
    public function lineconsIcons()
    {
        return view('admin.pages.icons.linecons');
    }
    public function fpsLineIcons()
    {
        return view('admin.pages.icons.fps-line-icon');
    }
    public function fontawesomeIcons()
    {
        return view('admin.pages.icons.fontawesome-icon');
    }
}
