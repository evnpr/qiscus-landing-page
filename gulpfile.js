const elixir = require('laravel-elixir');

// require('laravel-elixir-vue');
require('laravel-elixir-browsersync-official');

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
    mix.sass('app.scss')
    // mix.styles([
    //     '../../../bower_components/owl.carousel/dist/assets/owl.carousel.css',
    //     '../../../public/css/app.css'
    //     ], 'public/css/site.min.css')

    .webpack('app.js')

    // mix.scripts([
    //     '../../../bower_components/jquery/dist/jquery.js',
    //     '../../../bower_components/owl.carousel/dist/owl.carousel.js',
    //     '../../../public/js/app.js'
    //     ], 'public/js/app.min.js')

    .browserSync({
         files: [
                './public/**/*',                     
                './resources/assets/**/*.scss',
                './resources/views/**/*.blade.php',
                './app/**/*.php'                    
            ],
        proxy: 'localhost',
        logConnections: false,
        reloadOnRestart: true,
        notify: true
    })

});