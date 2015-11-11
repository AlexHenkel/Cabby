// // Include gulp
// var gulp = require('gulp');
// // Include plugins
// var concat = require('gulp-concat');
// var uglify = require('gulp-uglify');
// var rename = require('gulp-rename');
// // Concatenate & Minify JS
// gulp.task('scripts', function() {
//     return gulp.src('src/js/*.js')
//       .pipe(concat('main.js'))
//         .pipe(rename({suffix: '.min'}))
//         .pipe(uglify())
//         .pipe(gulp.dest('build/js'));
// });
// // Default Task
// gulp.task('default', ['scripts']);

// var sass = require('gulp-ruby-sass');
// gulp.task('sass', function() {
//     return sass('src/scss/style.scss', {style: 'compressed'})
//         .pipe(rename({suffix: '.min'}))
//         .pipe(gulp.dest('build/css'));
// });

// // Default Task
// gulp.task('default', ['scripts', 'sass']);




// Include Gulp
var gulp = require('gulp');

// Include plugins
var plugins = require("gulp-load-plugins")({
	pattern: ['gulp-*', 'gulp.*', 'main-bower-files'],
	replaceString: /\bgulp[\-.]/
});

// Define default destination folder
var dest = 'www/public/';

gulp.src(plugins.mainBowerFiles())
	.pipe(plugins.filter('*.js'))
	.pipe(/* doing something with the JS scripts */)
	.pipe(gulp.dest(dest + 'js'));


gulp.task('js', function() {

	var jsFiles = ['src/js/*'];

	gulp.src(plugins.mainBowerFiles().concat(jsFiles))
		.pipe(plugins.filter('*.js'))
		.pipe(plugins.concat('main.js'))
		.pipe(plugins.uglify())
		.pipe(gulp.dest(dest + 'js'));

});

// // Default Task
// gulp.task('default', ['js']);
