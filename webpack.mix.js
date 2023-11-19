const mix = require('laravel-mix');
require('laravel-mix-compress');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version()
    .sourceMaps();

    mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/app.css',
], 'public/css/app.css')
        .version()
    .sourceMaps();
mix.compress({
    productionOnly: false,
    minRatio: 1
});
