var gulp = require('gulp'),
    sass = require('gulp-sass'),
    prefix = require('gulp-autoprefixer'),
    minifyCSS = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    livereload = require('gulp-livereload');

gulp.task('styles', function () {
    return gulp.src('scss/**/*.scss')
        .pipe(sass())
        .pipe(prefix())
        .pipe(concat('style.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest(''));
});

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('scss/*.scss', ['styles']);
    gulp.watch('scss/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);