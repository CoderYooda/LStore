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

//modules
mix.sass('resources/modules/waves/waves.scss', 'public/modules/waves')
    .js('resources/modules/waves/waves.js', 'public/modules/waves')
    .scripts([
    'resources/modules/waves/waves-app.js',
], 'public/modules/waves/waves-app.js');

mix.js('resources/modules/fullscreen/fullscreen.js', 'public/modules/fullscreen')
    .js('resources/modules/fullscreen/fullscreen-app.js', 'public/modules/fullscreen');
