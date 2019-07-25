const mix = require('laravel-mix');

mix.sass('resources/sass/admin/core.scss', 'public/css/admin')
    .sass('resources/sass/admin/custom.scss', 'public/css/admin')
    .sass('resources/sass/admin/style.scss', 'public/css/admin')
    .sass('resources/sass/admin/theme/accent.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/danger.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/info.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/primary.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/success.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/warn.scss', 'public/css/admin/theme')
    .sass('resources/sass/admin/theme/warning.scss', 'public/css/admin/theme')
    .scripts([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/pace-progress/pace.min.js',
        'node_modules/pjax/pjax.min.js',
    ], 'public/js/admin/core.js')
    .scripts([
        'resources/js/admin/lazyload.config.js',
        'resources/js/admin/lazyload.js',
        'resources/js/admin/plugin.js',
        'resources/js/admin/nav.js',
        'resources/js/admin/scrollto.js',
        'resources/js/admin/toggleclass.js',
        'resources/js/admin/theme.js',
        'resources/js/admin/ajax.js',
        'resources/js/admin/app.js',
    ], 'public/js/admin/app.js');

//node-modules
mix.copyDirectory('resources/api', 'public/api')
    .copyDirectory('node_modules/summernote', 'public/modules/summernote')
    .copyDirectory('node_modules/datatables', 'public/modules/datatables')
    .copyDirectory('node_modules/draggable', 'public/modules/draggable')
    .copyDirectory('node_modules/datatables.net-bs4', 'public/modules/datatables.net-bs4')
    .copyDirectory('node_modules/parsleyjs', 'public/modules/parsleyjs')
    .copyDirectory('node_modules/node-waves', 'public/modules/node-waves')
    .copyDirectory('node_modules/notie', 'public/modules/notie')
    .copyDirectory('node_modules/draggable', 'public/modules/draggable')
    .copyDirectory('node_modules/select2', 'public/modules/select2')
    .copyDirectory('node_modules/jquery-fullscreen-plugin', 'public/modules/jquery-fullscreen-plugin')
    .copyDirectory('node_modules/peity', 'public/modules/peity')
    .copyDirectory('node_modules/jqvmap', 'public/modules/jqvmap')
    .copyDirectory('node_modules/chart.js', 'public/modules/chart.js')
    .copyDirectory('node_modules/bootstrap-datepicker', 'public/modules/bootstrap-datepicker')
    .copyDirectory('node_modules/bootstrap-table', 'public/modules/bootstrap-table')
    .copyDirectory('node_modules/moment', 'public/modules/moment');

//plugins
mix.js('resources/js/modules/bootstrap-table.js', 'public/js/modules')
    .js('resources/js/modules/chartjs.js', 'public/js/modules')
    .js('resources/js/modules/datatable.js', 'public/js/modules')
    .js('resources/js/modules/datetimepicker.js', 'public/js/modules')
    .js('resources/js/modules/datepicker.js', 'public/js/modules')
    .js('resources/js/modules/fullcalendar.js', 'public/js/modules')
    .js('resources/js/modules/fullscreen.js', 'public/js/modules')
    .js('resources/js/modules/jquery.chart.js', 'public/js/modules')
    .js('resources/js/modules/jquery.html5sortable.js', 'public/js/modules')
    .js('resources/js/modules/jquery.peity.tooltip.js', 'public/js/modules')
    .js('resources/js/modules/jquery.scrollreveal.js', 'public/js/modules')
    .js('resources/js/modules/jqvmap.js', 'public/js/modules')
    .js('resources/js/modules/notie.js', 'public/js/modules')
    .js('resources/js/modules/select2.js', 'public/js/modules')
    .js('resources/js/modules/sortable.js', 'public/js/modules')
    .js('resources/js/modules/tableExport.min.js', 'public/js/modules')
    .js('resources/js/modules/pages/modal.js', 'public/js/modules/pages')
    .js('resources/js/modules/waves.js', 'public/js/modules');
