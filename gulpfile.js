var elixir = require('laravel-elixir');
var gulp = require('gulp');

var paths = {
  'sass': './resources/assets/sass/'
}
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

elixir(function(mix) {
  mix
    .copy('public/libs_bower/semantic/dist/semantic.min.js', 'public/assets/js/semantic.min.js')
    .copy('public/libs_bower/semantic/dist/semantic.min.css', 'public/assets/css/semantic.min.css')
    .copy('public/libs_bower/jquery/dist/jquery.min.js', 'public/assets/js/jquery.min.js')
    .sass([
      'app.scss',
    ], 'public/assets/css'), {includePaths: [paths.sass] }
    //.version([
    //  'public/assets/css/main.css',
    //  'public/assets/js/semantic.js',
    //  'public/assets/css/semantic.css',
    //])
  ;
});

gulp.task('fonts', function() {
  gulp.src(['public/libs_bower/semantic-ui/dist/themes/default/assets/fonts/**/*'])
      .pipe(gulp.dest('public/assets/fonts'));
  //gulp.src(['bower_components/fontawesome/fonts/**/*'])
  //    .pipe(gulp.dest('public/build/assets/css/fonts'));
});