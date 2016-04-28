var gulp 				= require('gulp');
sass 				= require('gulp-ruby-sass'),
cssmin 			= require('gulp-minify-css'),
csscomb 		= require('gulp-csscomb'),
header  		= require('gulp-header'),
plumber 		= require('gulp-plumber'),
rename      = require('gulp-rename'),
sourcemaps	= require('gulp-sourcemaps'),
styledocco 	= require('gulp-styledocco');

var babelify = require('babelify');
var browserify = require('browserify');
var browserSync = require('browser-sync');
var buffer = require('vinyl-buffer');
var node = require('node-dev');
var source = require('vinyl-source-stream');


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

function errorHandler(err) {
  console.log('Error: ' + err.message);
}

// 自動ブラウザリロード
gulp.task('browser-sync', function() {
  browserSync({
    proxy: {
      target: 'http://localhost:3000'
    },
    port: 8080
  });
});

// Javascriptへのビルド
// ES6かつJSXなファイル群をbuild/bundle.jsへ変換する
gulp.task('build', function() {
  browserify({entries: ['./src/js/index.js']})
    .transform("babelify", {presets: ["es2015", "react"]})
    .bundle()
    .on('error', errorHandler)
    .pipe(source('bundle.js'))
    .pipe(buffer())
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.reload({stream: true}));
});

// ローカルサーバーの起動
gulp.task('server', function() {
  node(['./server.js']);
});

// ファイル監視
// ファイルに更新があったらビルドしてブラウザをリロードする
gulp.task('watch:react', function() {
  gulp.watch('./srcjs//index.js', ['build']);
  gulp.watch('./index.html', ['build']);
  gulp.watch('./src/js/**/*.js', ['build']);
  gulp.watch('src/sass/**/**/*', function(event) {
    gulp.run('sass');
  });
});

// gulpコマンドで起動したときのデフォルトタスク
gulp.task('react', ['server', 'build', 'watch:react', 'browser-sync']);

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