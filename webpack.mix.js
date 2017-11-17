let mix = require('laravel-mix');

/* AOS Mix Assets */
mix.copy('node_modules/aos/dist/aos.js', 'public/js/aos.js')
mix.copy('node_modules/aos/dist/aos.css', 'public/css/aos.css')

/* META+LAB UI-KIT Mix Assets */
mix.copy('bower_components/meta-ui/dist/js/meta-ui.js', 'public/js/meta-ui.js')
mix.copy('bower_components/meta-ui/dist/css/meta-ui.css', 'public/css/meta-ui.css')

/*META__KNIGHT Mix Assets */
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


	
