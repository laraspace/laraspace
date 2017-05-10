let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 */

var pluginPath =  'resources/assets/plugins/';

mix.combine([
    // ** Required Plugins **
    pluginPath + 'jquery/jquery.js',
    pluginPath + 'bootstrap/tether.js',
    pluginPath + 'bootstrap/bootstrap.js',
    pluginPath + 'customScrollBar/customScrollBar.js',

    // ** Additional Plugins **
    pluginPath + 'ladda/spin.js',
    pluginPath + 'ladda/ladda.js',
    pluginPath + 'toastr/toastr.js',
    pluginPath + 'notie/notie.js',
    pluginPath + 'jquery-validate/jquery.validate.js',
    pluginPath + 'jquery-validate/additional-methods.js',
    pluginPath + 'clockpicker/bootstrap-clockpicker.js',
    pluginPath + 'switchery/switchery.js',
    pluginPath + 'select2/select2.js',
    pluginPath + 'datatables/dataTables.min.js',
    pluginPath + 'datatables/dataTables.bootstrap.js',
    pluginPath + 'multiselect/jquery.multi-select.js',
    pluginPath + 'bootstrapSelect/bootstrap-select.js',
    pluginPath + 'bootstrap-datepicker/bootstrap-datepicker.js',
    pluginPath + 'timepicker/jquery.timepicker.js',
    pluginPath + 'summernote/summernote.js',
    pluginPath + 'simplemde/simplemde.min.js',
    pluginPath + 'Chartjs/Chart.js',
    pluginPath + 'alertify/alertify.js',
    pluginPath + 'easypiecharts/jquery.easypiechart.js',
    pluginPath + 'metisMenu/metisMenu.js',
    pluginPath + 'nestable/nestable.js',

    // ** Laraspace Inits **
    pluginPath + 'laraspace/laraspace-layout.js',
    pluginPath + 'laraspace/laraspace-notifs.js',
    pluginPath + 'laraspace/laraspace-forms.js'

],'public/assets/admin/js/core/plugins.js')

.js('resources/assets/admin/js/pages/dashboard.js', 'public/assets/admin/js/pages/')
.js('resources/assets/admin/js/pages/todos.js', 'public/assets/admin/js/pages/')

.sass('resources/assets/admin/sass/laraspace.scss', 'public/assets/admin/css/')

.version();


/*
 |--------------------------------------------------------------------------
 | Front
 |--------------------------------------------------------------------------
 */

mix.combine([
    // ** Required Plugins **
    pluginPath + 'jquery/jquery.js',
    pluginPath + 'bootstrap/tether.js',
    pluginPath + 'bootstrap/bootstrap.js',
    pluginPath + 'toastr/toastr.js',
    pluginPath + 'notie/notie.js',

    //Notifs
    pluginPath + 'laraspace/laraspace-notifs.js'
],'public/assets/front/js/plugins.js')

.sass('resources/assets/front/sass/front.scss', 'public/assets/front/css/')

.version();
