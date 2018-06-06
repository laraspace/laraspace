<?php
namespace Laraspace\Http\Controllers\Demo;

use Laraspace\Http\Requests;
use Laraspace\Http\Controllers\Controller;

class PagesController extends Controller
{
    // Layouts
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

    // Basic UI
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

    public function progressBars()
    {
        return view('admin.pages.basic.progress-bars');
    }

    // Components
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

    public function imageCropper()
    {
        return view('admin.pages.components.imagecropper');
    }

    public function imageZoom()
    {
        return view('admin.pages.components.zoom');
    }

    public function calendar()
    {
        return view('admin.pages.components.calendar');
    }

    public function nestableList()
    {
        return view('admin.pages.components.nestable-list');
    }

    public function nestableTree()
    {
        return view('admin.pages.components.nestable-tree');
    }

    public function ratings()
    {
        return view('admin.pages.components.ratings.star-ratings');
    }

    public function barRatings()
    {
        return view('admin.pages.components.ratings.bar-ratings');
    }

    public function contacts()
    {
        return view('admin.pages.components.contacts');
    }

    // Charts
    public function chartjs()
    {
        return view('admin.pages.charts.chartjs');
    }

    public function sparklineCharts()
    {
        return view('admin.pages.charts.sparkline');
    }

    public function amCharts()
    {
        return view('admin.pages.charts.amchart');
    }

    public function morrisCharts()
    {
        return view('admin.pages.charts.morris');
    }

    public function gaugeCharts()
    {
        return view('admin.pages.charts.gauge');
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

    public function wizards()
    {
        return view('admin.pages.forms.wizards');
    }

    public function wizards2()
    {
        return view('admin.pages.forms.wizards2');
    }

    public function wizards3()
    {
        return view('admin.pages.forms.wizards3');
    }

    // Gallery
    public function galleryGrid()
    {
        return view('admin.pages.gallery.grid');
    }

    public function galleryMasonryGrid()
    {
        return view('admin.pages.gallery.masonry-grid');
    }

    // Login
    public function login2()
    {
        return view('admin.sessions.login-2');
    }

    public function login3()
    {
        return view('admin.sessions.login-3');
    }

    // Register
    public function register2()
    {
        return view('admin.sessions.register-2');
    }

    public function register3()
    {
        return view('admin.sessions.register-3');
    }

    // Maintenance
    public function maintenance()
    {
        return view('maintenance.index');
    }

    // Icons
    public function icoMoons()
    {
        return view('admin.pages.icons.ico-moon');
    }

    public function evilIcons()
    {
        return view('admin.pages.icons.evil');
    }

    public function meteoIcons()
    {
        return view('admin.pages.icons.meteo');
    }

    public function lineIcons()
    {
        return view('admin.pages.icons.line');
    }

    public function fpsLineIcons()
    {
        return view('admin.pages.icons.fps-line');
    }

    public function fontawesomeIcons()
    {
        return view('admin.pages.icons.fontawesome');
    }
}
