/*************************************************
 * Require
 *************************************************/
var del = require('del');
var argv = require('yargs').argv;
var gulp = require('gulp');
// JS
var uglify = require('gulp-uglify');
// CSS
var minifycss = require('gulp-minify-css');
// UTIL
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var jshint = require('gulp-jshint');
var gulpif = require('gulp-if');

if (!!(argv.production)) {
    var config = { 
        'compressing': true
    };
} else {
    var config = { 
        'compressing': false
    };
}

/*************************************************
 * Paths
 *************************************************/
var path = {
    'src': {
        'assets': 'app/assets/', 
        'scripts': 'app/assets/js/',
        'styles': 'app/assets/css/',  
        'fonts': 'app/assets/fonts/'
    },
    'dist': {
        'assets': 'public/assets/', 
        'scripts': 'public/assets/js/',
        'styles': 'public/assets/css/',  
        'fonts': 'public/assets/fonts/'
    }
};

/*************************************************
 *  JS scripts to support specific order
 *************************************************/

var scripts = [ 
    path.src.scripts + '/app.js',
    path.src.scripts + '/**/*.js'
];

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
 * Vendors Tasks: Copy from bower components to public
 *************************************************/

gulp.task('vendors:js', function () {
  return gulp.src(vendors.scripts)
             .pipe(concat('vendors.js'))
             .pipe(gulpif(config.compressing, uglify()))
             .pipe(rename(function (path) {
                path.basename += ".min";
             }))
             .pipe(gulp.dest(path.dist.scripts));
});

gulp.task('vendors:css', function () {
  return gulp.src(vendors.styles)
             .pipe(concat('vendors.css'))
             .pipe(gulpif(config.compressing, minifycss()))
             .pipe(rename(function (path) {
               path.basename += ".min";
             }))
             .pipe(gulp.dest(path.dist.styles));
});

gulp.task('vendors:fonts', function () {
  return gulp.src(vendors.fonts)
             .pipe(gulp.dest(path.dist.fonts));
});

/*************************************************
 * Concat JS
 *************************************************/
gulp.task('app:js', function() {
  
  return gulp.src( scripts )
             .pipe(concat('app.js'))
             .pipe(gulpif(config.compressing, uglify()))
             .pipe(rename(function (path) {
                path.basename += ".min";
             }))
             .pipe(gulp.dest(path.dist.scripts));
});


/************************************************
 * Minify CSS
 ************************************************/
gulp.task('app:css', function() {
  return gulp.src([path.src.styles + '/**/*.css', '!'+path.src.styles + '/**/*.min.css'])
             .pipe(gulpif(config.compressing, minifycss()))
             .pipe(rename(function (path) {
               path.basename += ".min";
             }))
             .pipe(gulp.dest(path.dist.styles));
});

/************************************************
 * Clean assets folders
 ************************************************/
gulp.task('clean:all', function (cb) {
  del([
    path.dist.scripts+'/**',
    path.dist.styles+'/**',
    path.dist.fonts+'/**'  
  ], cb);
});

/************************************************
 * Run on demand server
 ************************************************/
gulp.task('server', function() {
  OnDemandServer = require('gulp-ondemand-server');
  var server = new OnDemandServer();

  // You can register a pattern of files to watch and the task to execute
  // when they change and a request arrive.
  server.watch('**/*.js', 'lint');

  // You can watch arrays of patterns, and execute arrays of tasks.
  server.watch(['styles/*.scss', 'styles/*.sass'], ['sass', 'autoprefixer']);

  // You should register the host you need, as well as the target URL
  // they're proxying.
  // For example to proxy everything from localhost:9810 ---> localhost:80
  server.registerHost('localhost', 'http://localhost');

  // You can have several hosts registered, as long as they share the proxy port
  // This will proxy http://mydomain.localhost:9810 ---> foo:80
  server.registerHost('mydomain.localhost', 'http://foo');

  // Another example: example-local:9810 ---> localhost:7653
  server.registerHost('example-local', 'http://localhost:7653');

  // Start listening in this port
  server.start(9810);
});


/*************************************************
 * Top level task definitions
 *************************************************/
gulp.task('vendors', ['vendors:js', 'vendors:css', 'vendors:fonts']);

gulp.task('app', ['app:js', 'app:css']);

gulp.task('default', ['vendors', 'app']);