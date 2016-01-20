"use strict";
const gulp = require(`gulp`),
	include = require("gulp-include"),
	sourcemaps = require('gulp-sourcemaps'),
	plumber = require('gulp-plumber'),
	imagemin = require(`gulp-imagemin`),
	pngquant = require(`imagemin-pngquant`),
	fs = require(`fs`),
	del = require(`del`),
	less = require(`gulp-less`),
	rename = require(`gulp-rename`),
	gp_sourcemaps = require(`gulp-sourcemaps`),
	browserSync = require(`browser-sync`).create(),
	runSequence = require(`run-sequence`),
	ncp = require(`ncp`).ncp,
	php2html = require(`gulp-php2html`),
	watch = require(`gulp-watch`),
	babel = require(`gulp-babel`),
	postcss = require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	pxtorem = require('postcss-pxtorem'),
	path = {
		src: {
			img: `src/fonts/`,
			watch__img: `src/img/**/**/**`,
			pages__less: `src/less/pages`,
			watch__less: `src/less/**/**/**/*.less`,
			pages__php: `src/php/pages`,
			watch__php: `src/php/**/**/**/*.php`,
			pages__js: `src/js/pages`,
			watch__js: `src/js/**/**/**/*.js`,
			watch__fonts: `src/fonts/**/**/**/**`
		},
		dist: {
			rootFolder: `dist`,
			watchFolders: `dist/**/**/**`,
			fonts: `dist/fonts`,
			img: `dist/img`
		},
		browserSync: {
			URI: `http://localhost:8888/sergeyruskov.github.io/dist/pages/`,
			port: 3020
		}
	};

class Pages {
	constructor(taskName, pagesSrc, renameFile) {
		this.taskName = taskName;
		this.pagesSrc = pagesSrc;
		this.pagesDist = `dist/pages`;
		this.renameFile = renameFile;
	}

	dist(distFileName) {
		return `${this.pagesDist}/${distFileName.split(`.`)[0]}`;
	}

	src(srcFileName) {
		return `${this.pagesSrc}/${srcFileName}`
	}

	taskLogic(logic) {
		const self = this;
		gulp.task(self.taskName, () => {
			fs.readdirSync(self.pagesSrc).forEach(logic.bind(self));
		});
	}
}

//less
new Pages(`less`, path.src.pages__less, `styles.css`).taskLogic(function (value) {
	const self = this,
		processors = [
			autoprefixer({
				browsers: 'last 2 version'
			}),
			pxtorem({
				prop_white_list: []
			})
		];
	gulp.src(self.src(value))
		.pipe(plumber())
		.pipe(gp_sourcemaps.init())
		.pipe(less())
		.pipe(postcss(processors))
		.pipe(rename(self.renameFile))
		.pipe(gp_sourcemaps.write())
		.pipe(gulp.dest(self.dist(value)))
		.pipe(browserSync.stream());
});

//php
new Pages(`php`, path.src.pages__php, `index.html`).taskLogic(function (value) {
	const self = this;
	gulp.src(self.src(value))
		.pipe(plumber())
		.pipe(php2html())
		.pipe(rename(self.renameFile))
		.pipe(gulp.dest(self.dist(value)))
		.pipe(browserSync.stream());
});

//js
new Pages(`js`, path.src.pages__js, `scripts.js`).taskLogic(function (value) {
	const self = this;


	gulp.src(self.src(value))
		.pipe(plumber())
		.pipe(include())
		.pipe(sourcemaps.init({loadMaps: true}))
		.pipe(babel({
			compact: false,
			presets: ['es2015']
		}))
		.pipe(rename(self.renameFile))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest(self.dist(value)))
		.pipe(browserSync.stream());
});

gulp.task(`fonts`, () => {
	ncp(path.src.img, path.dist.fonts, (err) => {
		if (err) {
			console.error(err);
		}
	});
});

gulp.task(`img`, () => {
	return gulp.src(path.src.watch__img)
		.pipe(plumber())
		.pipe(imagemin({
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		}))
		.pipe(gulp.dest(path.dist.img))
		.pipe(browserSync.stream())
});

gulp.task(`clean`, () => {
	return del.sync(path.dist.rootFolder);
});

gulp.task(`build`, function () {
	//Галп асинхроннен, поэтому чтобы запустить задачи последовательно надо использовать модуль runSequence, задачи указанные в квадратных скобках, будут вызваны асинхронно.
	runSequence(`clean`, [`img`, `js`, `less`, `fonts`, `php`]);
});

gulp.task(`default`, [`build`], () => {
	browserSync.init({
		port: path.browserSync.port,
		proxy: path.browserSync.URI,
		ui: false
	});

	watch(path.src.watch__less, () => {
		runSequence(`less`);
	});
	watch(path.src.watch__js, () => {
		runSequence(`js`);
	});
	watch(path.src.watch__img, () => {
		runSequence(`img`);
	});
	watch(path.src.watch__php, () => {
		runSequence(`php`);
	});
	watch(path.src.watch__fonts, () => {
		runSequence(`fonts`);
	});
});