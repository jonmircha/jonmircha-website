import gulp from 'gulp'
import browserSync from 'browser-sync'
import plumber from 'gulp-plumber'
import minifyHTML from 'gulp-minify-html'
import sass from 'gulp-sass'
import sourcemaps from 'gulp-sourcemaps'
import autoprefixer from 'gulp-autoprefixer'
import cleanCSS from 'gulp-clean-css'
import uncss from 'gulp-uncss'
import browserify from 'browserify'
import babelify from 'babelify'
import source from 'vinyl-source-stream'
import buffer from 'vinyl-buffer'
import jsmin from 'gulp-jsmin'
import imagemin from 'gulp-imagemin'

const server = browserSync,
  serverOptions = {
    server: {
      baseDir: './public'
    }
  },
  proxyOptions = {
    proxy: 'localhost/j/public',
    serveStatic: ['./public']
  },
  htmlOptions = {
    comments: true,
    spare: true
  },
  uncssOptions = {
    html: ['./public/index.html']
  },
  imageminOptions = {
    optimizationLevel: 7,
    progressive: true
  }

gulp.task('html', () => {
  gulp.src('./src/**/*.html')
    .pipe(plumber())
    .pipe(minifyHTML(htmlOptions))
    .pipe(gulp.dest('./public/'))
})

gulp.task('php', () => {
  gulp.src('./src/**/*.php')
    .pipe(plumber())
    .pipe(gulp.dest('./public/'))
})

gulp.task('css', () => {
  gulp.src('./src/scss/style.scss')
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer({ browsers: ['last 2 versions'] }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./public/css/'))
    .pipe(server.stream({ match: '**/*.css' }))
})

gulp.task('js', () => {
  browserify('./src/js/index.js')
    .transform(babelify)
    .bundle()
    .on('error', err => console.log(err.message))
    .pipe(source('script.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(sourcemaps.write('./'))
    .pipe(jsmin())
    .pipe(gulp.dest('./public/js/'))
    .pipe(server.stream({ match: '**/*.js' }))
})

gulp.task('media', () => {
  gulp.src('./src/img/**/*.{png,jpg,jpeg,gif,svg,ico,webp,mp4,mp3}')
    .pipe(imagemin(imageminOptions))
    .pipe(gulp.dest('./public/img'))
})

gulp.task('uncss', () => {
  gulp.src('./public/style.css')
    .pipe(uncss(uncssOptions))
    .pipe(gulp.dest('./public/css/'))
})

gulp.task('default', () => {
  server.init(serverOptions)
  gulp.watch('./src/**/*.html', ['html'])
  gulp.watch('./src/**/*.scss', ['css'])
  gulp.watch('./src/**/*.js', ['js'])
  gulp.watch('./public/**/*.html').on('change', server.reload)
})

gulp.task('proxy', () => {
  server.init(proxyOptions)
  gulp.watch('./src/**/*.html', ['html'])
  gulp.watch('./src/**/*.php', ['php'])
  gulp.watch('./src/**/*.scss', ['css'])
  gulp.watch('./src/**/*.js', ['js'])
  gulp.watch('./public/**/*.+(html|php)').on('change', server.reload)
})
