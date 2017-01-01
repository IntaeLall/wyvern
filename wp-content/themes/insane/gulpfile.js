var fs         = require("fs"),
    gulp       = require('gulp'),
    livereload = require('gulp-livereload'),
    sass       = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    gutil      = require('gulp-util'),
    uglify     = require('gulp-uglify'),
    source     = require('vinyl-source-stream'),
    buffer     = require('vinyl-buffer'),
    path       = require('path'),
    projectRoot= path.resolve(__dirname, './'),
    exec       = require('child_process').exec;

gulp.task('js', function (cb) {
    exec('webpack --config webpack.config.dev.js --progress --hide-modules', function (err, stdout, stderr) {
        cb(err);
    });
});

gulp.task('js-build', function(cb) {
    exec('webpack --config webpack.config.prod.js --progress --hide-modules', function (err, stdout, stderr) {
        cb(err);
    });
})

gulp.task('reload', function () {
    livereload.reload()
});

gulp.task('sass', function () {
    return gulp.src('./*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(['lib/src/*.js', 'lib/src/*.vue'], ['js']);
    gulp.watch(['*.scss'], ['sass']);
    gulp.watch('lib/dist/build.js', ['reload']);
});

gulp.task('build', ['sass', 'js-build']);