var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');


// Not all tasks need to use streams
// A gulpfile is just another node program and you can use any package available on npm
gulp.task('clean', function() {
  // You can use multiple globbing patterns as you would with `gulp.src`
  return del(['build']);
});


// Sass processing
// sass->css
gulp.task('sass', function() {
  return gulp.src('rubicon/scss/**/*.scss')
    .pipe(sourcemaps.init())
    // Convert sass into css
    .pipe($.sass({
      outputStyle: 'nested', // libsass doesn't support expanded yet
      precision: 10
    }))
    // Save css
    .pipe(gulp.dest('rubicon/css'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

// The default task (called when you run `gulp` from cli)


// BrowserSync
gulp.task('browser-sync', function() {
  //watch files
  var files = [
    'rubicon/scss/*.scss'
  ];
  //initialize browsersync
  browserSync.init(files, {
    proxy: "http://rubicon.lc" // BrowserSync proxy, change to match your local environment
  });
});


// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function() {
  gulp.watch("rubicon/scss/**/*.scss", ['sass']);
});

