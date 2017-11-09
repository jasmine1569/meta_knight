let mix = require('laravel-mix');

/* META+LAB UI-KIT Mix Assets */
mix.js('bower_components/meta-ui/src/js/meta-ui.js', 'public/js/meta-ui.js')
mix.sass('bower_components/meta-ui/src/sass/meta-ui.scss', 'public/css/meta-ui.css')

/*META__KNIGHT Mix Assets */
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


	
