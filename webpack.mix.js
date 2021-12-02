const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/assets/vendors/feather/feather.css',
    'resources/assets/vendors/mdi/css/materialdesignicons.min.css',
    'resources/assets/vendors/ti-icons/css/themify-icons.css',
    'resources/assets/vendors/typicons/typicons.css',
    'resources/assets/vendors/simple-line-icons/css/simple-line-icons.css',
    'resources/assets/vendors/css/vendor.bundle.base.css',
    'resources/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css',
    'resources/assets/js/select.dataTables.min.css',
    'resources/assets/js/select.dataTables.min.css',
    'resources/assets/css/vertical-layout-light/style.css',
], 'public/assets/backend/css/backend.css');
mix.scripts([
    'resources/assets/vendors/js/vendor.bundle.base.js',
    'resources/assets/vendors/chart.js/Chart.min.js',
    'resources/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js',
    'resources/assets/vendors/progressbar.js/progressbar.min.js',
    'resources/assets/js/hoverable-collapse.js',
    'resources/assets/js/template.js',
    'resources/assets/js/settings.js',
    'resources/assets/js/todolist.js',
    'resources/assets/js/dashboard.js',
    'resources/assets/js/Chart.roundedBarCharts.js',
    ''
],'public/assets/backend/js/backend.js')




