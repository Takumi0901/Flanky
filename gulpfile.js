var gulp 				= require('gulp');
sass 				= require('gulp-ruby-sass'),
cssmin 			= require('gulp-minify-css'),
csscomb 		= require('gulp-csscomb'),
header  		= require('gulp-header'),
plumber 		= require('gulp-plumber'),
rename      = require('gulp-rename'),
sourcemaps	= require('gulp-sourcemaps'),
styledocco 	= require('gulp-styledocco');


gulp.task('sass', function() {
  return sass('src/sass/app.scss', { style: 'expanded', sourcemap: true })
  .pipe(plumber())
  .on('error', sass.logError)
  .pipe(gulp.dest('dist/css'))
  .pipe(header('@charset "utf-8";\n'))
  .pipe(cssmin())
  .pipe(rename({
    extname: '.min.css'
  }))
  .pipe(sourcemaps.write('maps', {
    includeContent: false,
    sourceRoot: '../../src/sass/'
  }))
  .pipe(gulp.dest('dist/css'))
});

// gulp.task('styledocco', function() {
//   gulp.src('css/app.css')
//     .pipe(plumber())
//     .pipe(styledocco({
//       out: 'docs',
//       name: 'My Project',
//       'no-minify': true
//     }));
// });


gulp.task('watch', function(){
  gulp.watch('src/sass/**/**/*', function(event) {
    gulp.run('sass');
  });
    // gulp.watch('css/app.css', function(event) {
    //     gulp.run('styledocco');
    // });
  });

gulp.task('default', function(){
  gulp.run('watch');
});