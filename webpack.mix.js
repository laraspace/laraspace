let mix = require('laravel-mix')

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

var pluginPath = 'resources/plugins/'

mix.combine([
  // ** Required Plugins **
  pluginPath + 'jquery/jquery.js',
  pluginPath + 'bootstrap/popper.js',
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
  pluginPath + 'datatables/jquery.dataTables.js',
  pluginPath + 'datatables/dataTables.bootstrap4.js',
  pluginPath + 'datatables/dataTables.responsive.js',
  pluginPath + 'multiselect/jquery.multi-select.js',
  pluginPath + 'bootstrap-datepicker/bootstrap-datepicker.js',
  pluginPath + 'timepicker/jquery.timepicker.js',
  pluginPath + 'summernote/summernote.js',
  pluginPath + 'simplemde/simplemde.min.js',
  pluginPath + 'prism/prism.js',
  pluginPath + 'charts/chartjs/Chart.js',
  pluginPath + 'charts/sparkline/jquery.sparkline.js',
  pluginPath + 'charts/amcharts/amcharts.js',
  pluginPath + 'charts/amcharts/serial.js',
  pluginPath + 'charts/amcharts/amstock.js',
  pluginPath + 'charts/amcharts/xy.js',
  pluginPath + 'charts/amcharts/ammap.js',
  pluginPath + 'charts/amcharts/worldLow.js',
  pluginPath + 'charts/amcharts/pie.js',
  pluginPath + 'charts/amcharts/animate.js',
  pluginPath + 'charts/amcharts/export.js',
  pluginPath + 'charts/amcharts/radar.js',
  pluginPath + 'charts/amcharts/polarScatter.js',
  pluginPath + 'charts/amcharts/light.js',
  pluginPath + 'charts/morris/raphael.js',
  pluginPath + 'charts/morris/morris.js',
  pluginPath + 'charts/gauges/gauge.js',
  pluginPath + 'alertify/alertify.js',
  pluginPath + 'easypiecharts/jquery.easypiechart.js',
  pluginPath + 'metisMenu/metisMenu.js',
  pluginPath + 'form-wizard/jquery.steps.js',
  pluginPath + 'bar-rating/jquery.barrating.js',
  pluginPath + 'nestable/nestable.js',
  pluginPath + 'jstree/jstree.js',
  pluginPath + 'gallery/image/photoswipe.js',
  pluginPath + 'gallery/image/photoswipe-ui-default.js',
  pluginPath + 'gallery/image/mp.mansory.js',
  pluginPath + 'gallery/image/gallery.js',
  pluginPath + 'gallery/video/videobox.js',
  pluginPath + 'rating/jquery.raty.js',
  pluginPath + 'zoom/transition.js',
  pluginPath + 'zoom/zoom.js',
  pluginPath + 'calendar/moment.js',
  pluginPath + 'calendar/fullcalendar.js',
  pluginPath + 'imageCropper/cropper.js',
  pluginPath + 'ace-editor/ace.js',
  pluginPath + 'icons/evil.js',
  pluginPath + 'ace-editor/twilight.js',

  // ** Laraspace Inits **
  pluginPath + 'laraspace/laraspace-layout.js',
  pluginPath + 'laraspace/laraspace-notifs.js',
  pluginPath + 'laraspace/laraspace-forms.js'

], 'public/assets/admin/js/core/plugins.js')

.js('resources/admin/js/app.js', 'public/assets/admin/js/core/')

.sass('resources/admin/sass/laraspace.scss', 'public/assets/admin/css/')

.options({
    processCssUrls: false
})

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

  // Notifs
  pluginPath + 'laraspace/laraspace-notifs.js'
], 'public/assets/front/js/plugins.js')

.sass('resources/front/sass/front.scss', 'public/assets/front/css/')

.options({
    processCssUrls: false
})

.version();
