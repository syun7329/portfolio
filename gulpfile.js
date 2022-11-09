const { src, dest, watch, series, parallel } = require("gulp");

const plumber = require("gulp-plumber");
const sassGlob = require("gulp-sass-glob-use-forward");
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require("gulp-autoprefixer");
const notify = require('gulp-notify');
const progeny = require('gulp-progeny');
const browserSync = require("browser-sync");
const imageMin = require('gulp-imagemin');
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const changed = require("gulp-changed");
const uglify = require('gulp-uglify');

require('dotenv').config();

const srcPath = './src/assets/**';
const distPath = './src/assets/**';
const sassSrcPath = './src/assets/sass/**/*.scss';
const sassDistPath = './dist/assets/css';
const imageSrcPath = './src/assets/images/**';
const imageDistPath = './dist/assets/images';
const jsSrcPath = './src/assets/js/**';
const jsDistPath = './dist/assets/js';

// sassコンパイル
const compileSass = (done) => {
	src(sassSrcPath)
		.pipe(plumber(notify.onError({
			title: "Gulp",
			subtitle: "Sassをコンパイルに失敗しました!",
			message: "Error: <%= error.message %>",
			sound: "Sosumi"
		})))
		.pipe(progeny())
		// .pipe(cache('sass'))
		.pipe(sassGlob())
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(dest(sassDistPath))
		// .pipe(process.env.ON_SUCCESS_NOTIFY && notify({
		// 	message: 'Sassをコンパイルしました！',
		// 	onLast: true,
		// 	sound: 'Glass',
		// }))
		// .pipe(gulpIf(process.env.ON_SUCCESS_NOTIFY == true, notify({
		// 	message: 'Sassをコンパイルしました！',
		// 	onLast: true,
		// 	sound: 'Glass',
		// }))
			.on("finish", function () {
				console.log('\x1b[32m', 'Sassをコンパイルしました！')
			});
	
	done();
}

// ブラウザ起動
const initBrowserSync = (done) => {
	browserSync.init({
    proxy: process.env.PROXY,
    notify: true,
    open: "external",
  });

  done();
}

// ブラウザ自動リロード
const reloadBrowserSync = (done) => {
	browserSync.reload();
  done();
}

// 画像圧縮
const minImage = (done) => {
	src(imageSrcPath)
		.pipe(plumber(notify.onError({
			title: "Gulp",
			subtitle: "画像圧縮に失敗しました!",
			message: "Error: <%= error.message %>",
			sound: "Sosumi"
		})))
		.pipe(changed(imageDistPath))
		.pipe(
			imageMin({
				quality: [0.6, 0.7],
				speed: 1,
			}),
			mozjpeg({ quality: 65 }),
			imageMin.svgo(),
			imageMin.optipng(),
			pngquant('65-80'),
			imageMin.gifsicle({ optimizationLevel: 3 }),
		)
		.pipe(dest(imageDistPath))
		.on("finish", function () {
			console.log('\x1b[32m', '画像を圧縮しました')
		});
	done();
}

// JS min化
const minJs = (done) => {
	src(jsSrcPath)
		.pipe(plumber(notify.onError({
			title: "Gulp",
			subtitle: "JS圧縮に失敗しました!",
			message: "Error: <%= error.message %>",
			sound: "Sosumi"
		})))
		.pipe(uglify())
		.pipe(dest(jsDistPath))
		.on("finish", function () {
			console.log('\x1b[32m', 'JSを圧縮しました')
		});
	
	done();
}

// 監視タスク
const watchTask = () => {
	watch(srcPath, series(compileSass, minJs, minImage, reloadBrowserSync));
}

exports.watch = series(initBrowserSync, compileSass, minJs, minImage, watchTask);