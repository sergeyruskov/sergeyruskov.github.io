"use strict";
const gulp = require(`gulp`),
		include = require(`gulp-include`),
		sourcemaps = require(`gulp-sourcemaps`),
		plumber = require(`gulp-plumber`),
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
		postcss = require(`gulp-postcss`),
		autoprefixer = require(`autoprefixer`),
		pxtorem = require(`postcss-pxtorem`),
		path = {
			src: {
				watch__img: `src/img/**/**/**`,
				pages__less: `src/less/pages`,
				watch__less: `src/less/**/**/**/*.less`,
				pages__php: `src/php/pages`,
				watch__php: `src/php/**/**/**/*.php`,
				pages__js: `src/js/pages`,
				watch__js: `src/js/**/**/**/*.js`,
				fonts: `src/fonts/`,
				watch__fonts: `src/fonts/**/**/**/**`
			},
			dist: {
				rootFolder: `dist`,
				watchFolders: `dist/**/**/**`,
				fonts: `dist/fonts`,
				img: `dist/img`
			},
			browserSync: {
				//URI: `http://localhost:63342/sergeyruskov.github.io/dist/pages/`,
				URI: `http://localhost:8888/sergeyruskov.github.io/dist/pages/`,
				port: 3020
			}
		};

//Используется для тех случаев когда сразу было отредактированно несколько типов файлов. 3 так как тасков которые которые запускаются при ПЕРВОМ запуске галпа тоже 3(из тех что будут использоваться через class Page). При запуске задача добавляет единицу в этот счетчик, после отработки убирает, таким образом можно узнать, что в данный момент отрабатывается несколько несколько задач, и запустить reload только после отработки их всех.
let howManyTaskRun = 3;

function preventDoubleCompileAndReload(obj) {
	let delay = 2000,
			startCompile;
	gulp.watch(obj.src, () => {
				if (startCompile !== true) {
					console.log(`${obj.task.toUpperCase()} начал компилироваться`);
					++howManyTaskRun;
					runSequence(obj.task);
					startCompile = true;
					setTimeout(() => {
						startCompile = false;
					}, delay);
				}
			}
	);
}

class Pages {
	constructor(taskName, pagesSrc, renameFile) {
		this.taskName = taskName;
		this.pagesSrc = pagesSrc;
		this.pagesDist = `dist/pages`;
		this.filesCounter = 0;
		this.finalAmountFiles = 0;
		this.renameFile = renameFile;
		this.timeStartCompiling = 0;
	}

	reloadBrowser() {
		let self = this;

		if (self.filesCounter === 0) {
			self.timeStartCompiling = +new Date;
		}

		++self.filesCounter;

		if (self.filesCounter === self.finalAmountFiles) {
			self.filesCounter = 0;
			//Добавляем одну секунду так как запись начального времени начинается только после того как
			// откомпилируется 1ый файл
			const compileTime = Math.round((( +new Date - self.timeStartCompiling) / 1000) % 60) + 1;
			console.log(`${self.taskName.toUpperCase()} компилировался ${compileTime} сек`);
			--howManyTaskRun;
			if (howManyTaskRun === 0) {
				browserSync.reload();
			}
		}
	}

	dist(distFileName) {
		return `${this.pagesDist}/${distFileName.split(`.`)[0]}`;
	}

	src(srcFileName) {
		return `${this.pagesSrc}/${srcFileName}`
	}

	taskLogic(logic) {
		const self = this;
		let files = [];
		gulp.task(self.taskName, () => {
			files = fs.readdirSync(self.pagesSrc);
			self.finalAmountFiles = files.length;
			files.forEach(logic.bind(self));
		});
	}
}

//less
new Pages(`less`, path.src.pages__less, `styles.css`).taskLogic(function (value) {
	const self = this,
			processors = [
				autoprefixer({
					browsers: `last 2 version`
				}),
				pxtorem({
					prop_white_list: []
				})
			];
	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(gp_sourcemaps.init())
			.pipe(less())
			.pipe(postcss(processors))
			.pipe(rename(self.renameFile))
			.pipe(gp_sourcemaps.write())
			.pipe(gulp.dest(self.dist(value)))
			.on(`end`, self.reloadBrowser.bind(self));
});

//php
new Pages(`php`, path.src.pages__php, `index.html`).taskLogic(function (value) {
	const self = this;
	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(php2html())
			.pipe(rename(self.renameFile))
			.pipe(gulp.dest(self.dist(value)))
			.on(`end`, self.reloadBrowser.bind(self));
});

//js
new Pages(`js`, path.src.pages__js, `scripts.js`).taskLogic(function (value) {
	const self = this;

	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(include())
			.pipe(sourcemaps.init({loadMaps: true}))
			.pipe(babel({
				compact: false,
				presets: [`es2015`]
			}))
			.pipe(rename(self.renameFile))
			.pipe(sourcemaps.write(`./`))
			.pipe(gulp.dest(self.dist(value)))
			.on(`end`, self.reloadBrowser.bind(self));
});

gulp.task(`fonts`, () => {
	ncp(path.src.fonts, path.dist.fonts, (err) => {
		if (err) {
			console.error(err);
		}
	});
});

gulp.task(`img`, () => {
	return gulp.src(path.src.watch__img)
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(imagemin({
				progressive: true,
				svgoPlugins: [{removeViewBox: false}],
				use: [pngquant()]
			}))
			.pipe(gulp.dest(path.dist.img))
			.pipe(browserSync.stream())
});

//Если открыть папки в windows и смотреть как модуль удаляет файлы - будет ошибка
gulp.task(`clean`, () => {
	return del.sync(path.dist.rootFolder);
});

gulp.task(`cleanImg`, () => {
	return del.sync(path.dist.img);
});

gulp.task(`build`, () => {
	//Галп асинхроннен, поэтому чтобы запустить задачи последовательно надо использовать модуль runSequence, задачи указанные в квадратных скобках, будут вызваны асинхронно.
	runSequence(`clean`, [`img`, `js`, `less`, `fonts`, `php`]);
});

gulp
		.task(`default`, [`build`], () => {

			browserSync.init({
				port: path.browserSync.port,
				proxy: path.browserSync.URI,
				ui: false
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__less,
				task: `less`
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__php,
				task: `php`
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__js,
				task: `js`
			});

			watch(path.src.watch__img, () => {
				runSequence(`cleanImg`, `img`);
			});
			watch(path.src.watch__fonts, () => {
				runSequence(`fonts`);
			});
		});