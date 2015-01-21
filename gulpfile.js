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
var changed = require('gulp-changed');

/*************************************************
 * Load config
 *************************************************/
var env = '';

if (typeof argv.env === 'string') {
    env = '-'+argv.env;
}

var config = require('./gulp-conf'+env+'.json');
var path = config.path;
var scripts = config.scripts;
var vendors = config.vendors;

/*************************************************
 * Vendors Tasks: Copy from bower components to public
 *************************************************/
function copyVendorJs(vendor, src) {
    return gulp.src(src.scripts)
               .pipe(gulp.dest(path.dist.scripts+vendor));
}

function copyVendorCss(vendor, src) {
    return gulp.src(src.styles)
               .pipe(gulp.dest(path.dist.styles+vendor));
}

function copyVendorFonts(vendor, src) {
    return gulp.src(src.fonts)
               .pipe(gulp.dest(path.dist.fonts+vendor));
}


gulp.task('vendors', function () {
  for (name in vendors) {
      vendors[name].hasOwnProperty('scripts') && copyVendorJs(name, vendors[name]);
      vendors[name].hasOwnProperty('styles') && copyVendorCss(name, vendors[name]);
      vendors[name].hasOwnProperty('fonts') && copyVendorFonts(name, vendors[name]);
  }
});

/*************************************************
 * Concat JS
 *************************************************/
gulp.task('app:js', function() {
  
  return gulp.src( scripts )
             .pipe(changed(path.dist.scripts))
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
             .pipe(changed(path.dist.styles))
             .pipe(gulpif(config.compressing, minifycss()))
             .pipe(rename(function (path) {
               path.basename += ".min";
             }))
             .pipe(gulp.dest(path.dist.styles));
});

/************************************************
 * Copy img to public folder
 ***********************************************/
gulp.task('app:img', function () {
  return gulp.src(path.src.img)
             .pipe(changed(path.dist.img))
             .pipe(gulp.dest(path.dist.img));
});

/************************************************
 * Clean assets folders
 ************************************************/
gulp.task('clean:all', function (cb) {
  del([
    path.dist.scripts+'/**',
    path.dist.styles+'/**',
    path.dist.fonts+'/**',
    path.dist.img+'/**'  
  ], cb);
});

/************************************************
 * Run on demand server
 ************************************************/
gulp.task('server', ['default'], function() {
  OnDemandServer = require('gulp-ondemand-server');
  var server = new OnDemandServer();
  
  server.watch(path.src.scripts + '/**/*', 'app:js');
  server.watch(path.src.styles + '/**/*', 'app:css');
  server.watch(path.src.img + '/**/*', 'app:img');

  // Proxy everything from mgtstock.com.dev:8080 ---> mgtstock.com.dev:80
  server.registerHost('mgtstock.com.dev', 'http://mgtstock.com.dev');
  
  // Start listening in this port
  server.start(8080);
});


/*************************************************
 * Top level task definitions
 *************************************************/
gulp.task('app', ['app:js', 'app:css', 'app:img']);

gulp.task('default', ['clean:all'], function() {
    gulp.start('vendors', 'app');
});

