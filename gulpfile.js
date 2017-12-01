const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');

gulp.task('css', () => {
    return gulp.src('./src/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: "compressed"}).on('error', sass.logError))
    .pipe(autoprefixer({browsers: ['last 2 versions']}))
    .pipe(sourcemaps.write('../sourcemaps/'))
    .pipe(gulp.dest('./public/css'));
});

gulp.task('js',() => {
	return gulp.src('./src/js/*.js')
	.pipe(sourcemaps.init())
	.pipe(babel({presets: ['env'], minified: true}))
	.pipe(sourcemaps.write('../sourcemaps/'))
	.pipe(gulp.dest('./public/js'));
});

gulp.task('watch', () => {
	gulp.watch('./src/scss/*.scss', ['css']);
	gulp.watch('./src/js/*.js', ['js']);
});

gulp.task('default', ['css','js','watch']);