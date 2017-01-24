const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    elixir.config.assetsPath = 'resources/assets/admin/';

    mix.sass('laraspace.scss', 'public/assets/admin/css/laraspace.css');

    // Bundle up required plugin scripts
    mix.scripts([
        // ** Required Plugins **
        'jquery/jquery.js',
        'bootstrap/tether.js',
        'bootstrap/bootstrap.js',
        'customScrollBar/customScrollBar.js',

        // ** Additional Plugins **
        'ladda/spin.js',
        'ladda/ladda.js',
        'toastr/toastr.js',
        'notie/notie.js',
        'jquery-validate/jquery.validate.js',
        'jquery-validate/additional-methods.js',
        'clockpicker/bootstrap-clockpicker.js',
        'switchery/switchery.js',
        'select2/select2.js',
        'datatables/dataTables.min.js',
        'datatables/dataTables.bootstrap.js',
        'multiselect/jquery.multi-select.js',
        'bootstrapSelect/bootstrap-select.js',
        'bootstrap-datepicker/bootstrap-datepicker.js',
        'timepicker/jquery.timepicker.js',
        'summernote/summernote.js',
        'simplemde/simplemde.min.js',
        'Chartjs/Chart.js',
        'alertify/alertify.js',
        'easypiecharts/jquery.easypiechart.js',
        
        // ** Laraspace Inits **
        'laraspace/laraspace-layout.js',
        'laraspace/laraspace-notifs.js',
        'laraspace/laraspace-forms.js'

    ],'public/assets/admin/js/core/plugins.js','./resources/assets/plugins');


    // Browserify your app pages
    mix.webpack('pages/dashboard.js', 'public/assets/admin/js/pages/dashboard.js');
    mix.webpack('pages/todos.js', 'public/assets/admin/js/pages/todos.js');


    elixir.config.assetsPath = 'resources/assets/front/';

    //FRONT
    mix.sass('front.scss', 'public/assets/front/css/front.css');
});
