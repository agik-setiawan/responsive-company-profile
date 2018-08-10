var gulp=require('gulp');
var sass=require('gulp-sass');

var uglify=require('gulp-uglify');
var minify=require('gulp-minify-css')

var jsFolder='assets/js/*';
var cssFolder='assets/css/*';
var distFolder='assets/dist';

var distFolder2='C:/server/www/agik-setiawan/wordpress-theme/wp-content/themes/ocean/assets/dist';

gulp.task('sass',function(){

gulp.src('assets/sass/index.scss')
.pipe(sass())
.pipe(gulp.dest('assets/css/'))
.pipe(gulp.dest('C:/server/www/agik-setiawan/wordpress-theme/wp-content/themes/ocean/assets/css'));

});

gulp.task('watch',function(){
gulp.watch('assets/sass/**/*.scss', ['sass']);
});

gulp.task('build',['build:copyCSS','build:copyJS']);
gulp.task('build:copyJS',function(){
return gulp.src(jsFolder)
.pipe(uglify({mangle:false}))
.pipe(gulp.dest(distFolder2 + '/js/'))
.pipe(gulp.dest(distFolder + '/js/'));
});
gulp.task('build:copyCSS',function(){
    return gulp.src(cssFolder)
    .pipe(minify())
    .pipe(gulp.dest(distFolder2 + '/css/'))
    .pipe(gulp.dest(distFolder + '/css/'));
})

gulp.task( 'default', [ 'sass' ] )

