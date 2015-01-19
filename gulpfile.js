/*************************************************
 * Require
 *************************************************/
var gulp = require('gulp');
// JS
var uglify = require('gulp-uglify');
// CSS
var minifycss = require('gulp-minify-css');
// UTIL
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var cache = require('gulp-cache');
var clean = require('gulp-clean');
var jshint = require('gulp-jshint');

/*************************************************
 * Paths
 *************************************************/

var paths = {
  "assets": "public/assets", 
  "scripts": "public/assets/js",
  "styles": "public/assets/css",  
  "fonts": "public/assets/fonts",  
  "bower": "bower_components"
};

/*************************************************
 * Vendors 
 *************************************************/
var vendors = {
  "scripts": [
    "./bower_components/jquery/dist/jquery.js",
    "./bower_components/bootstrap/dist/js/bootstrap.js"
    
  ],
  "styles": [
    "./bower_components/bootstrap/dist/css/bootstrap.css",
    "./bower_components/bootstrap/dist/css/bootstrap-theme.css"
  ],
  "fonts": [
    "./bower_components/bootstrap/dist/fonts/*"
  ]
};

/*************************************************
 *  JS scripts to support specific order
 *************************************************/

var scripts = [ 
    paths.scripts + '/app.js' 
];


/*************************************************
 * Vendors Tasks: Copy from bower components to public
 *************************************************/

gulp.task('vendors/js', function () {
  return gulp.src(vendors.scripts)
    .pipe(concat('vendors.js'))
    .pipe(gulp.dest(paths.scripts));
});

gulp.task('vendors/css', function () {
  return gulp.src(vendors.styles)
    .pipe(concat('vendors.css'))
    .pipe(gulp.dest(paths.styles));
});

gulp.task('vendors/fonts', function () {
  return gulp.src(vendors.fonts)
    .pipe(gulp.dest(paths.fonts));
});

/*************************************************
 * Check with jshint
 *************************************************/
gulp.task('app/jshint', function() {
  return gulp.src(scripts)
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

/*************************************************
 * Minify JS
 *************************************************/
gulp.task('app/jsmin', ['vendors/js','app/jshint'], function() {
  var src = scripts.slice();
      src.unshift(paths.scripts + '/vendors.js');
  return gulp.src( src )
            .pipe(uglify())
            .pipe(rename(function (path) {
                path.basename += ".min";
            }))
            .pipe(gulp.dest(paths.scripts));
});

/************************************************
 * Minify CSS
 ************************************************/

gulp.task('app/cssmin', ['vendors/css'], function() {
  return gulp.src([paths.styles + '/*.css', '!'+paths.styles + '/*.min.css'])
    .pipe(minifycss())
    .pipe(rename(function (path) {
      path.basename += ".min";
    }))
    .pipe(gulp.dest(paths.styles));
});

gulp.task('default', ['app/jsmin', 'app/cssmin', 'vendors/fonts']);