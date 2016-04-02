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
		cssnano = require('cssnano'),
		pathBaseModule = require('path'),
		path = {
			src: {
				watch__lessLib: [
					`src/less/lib/**/*.less`,
					`src/less/lego/common/**/*.less`,
					`src/less/lib.less`
				],
				less: `src/less`,
				lessLib: `src/less/lib.less`,
				watch__jsLib: [
					`src/js/lego/common/*.js`,
					`src/js/lib.js`
				],
				js: `src/js`,
				jsLib: `src/js/lib.js`,
				watch__img: `src/img/**/**/**`,
				pages__less: `src/less/pages`,
				watch__less: `src/less/**/**/**/*.less`,
				pages__php: `src/php/pages`,
				watch__php: `src/php/**/**/**/*.php`,
				pages__js: `src/js/pages`,
				watch__js: `src/js/**/**/**/*.js`,
				fonts: `src/fonts/`,
				watch__fonts: `src/fonts/**`
			},
			dist: {
				rootFolder: `dist/**`,
				css: `dist/css`,
				cssDev: `dist/css-dev`,
				jsDev: `dist/js-dev`,
				html: `dist/html`,
				fonts: `dist/fonts`,
				img: `dist/img`,
				js: `dist/js`
			},
			browserSync: {
				URI: `http://localhost:8888/psychologies_html_adaptive/src/php/pages/`,
				port: 3020
			}
		};

//Используется для тех случаев когда сразу было отредактированно несколько типов файлов.  При запуске задача добавляет единицу в этот счетчик, после отработки убирает, таким образом можно узнать, что в данный момент отрабатывается несколько несколько задач, и запустить reload только после отработки их всех.
let tasks = {
	//Счетчик текущих работующих задача, если их больше 1, то мы дождемся пока отработает последняя и только после этого сделаем reload
	howManyTasksWork: 0,
	//Объект для отображения времени исполнения задачи
	startTime: {}
};


function preventDoubleCompileAndReload(obj) {
	let startCompile;

	function compile(obj) {
		let delay = 2000;

		//Если отредактировано сразу несколько файлов галп запустит задачу столько раз, сколько он быд
		// отредактирован, дабы не дать ему это сделать, делаем следующее...
		if (startCompile !== true) {
			++tasks.howManyTasksWork;
			gulp.start(obj.task);
			console.log(`${obj.task.toUpperCase()} начал компилироваться`);
			tasks.startTime[obj.task] = +new Date;
			startCompile = true;
			setTimeout(() =>
				startCompile = false
			, delay);
		}
	}

	obj.onceRunLogic === true ?
			compile(obj) :
			gulp.watch(obj.src, () =>
				compile(obj)
			);
}

class Pages {

	constructor(taskName, pagesSrc, renameFile) {
		this.taskName = taskName;
		this.pagesSrc = pagesSrc;
		this.pagesDist = `dist`;
		this.filesCounter = 0;
		this.finalAmountFiles = 0;
		this.renameFile = renameFile;
	}

	reloadBrowser() {
		let self = this;

		if (++self.filesCounter === self.finalAmountFiles) {
			self.filesCounter = 0;
			const compileTime = Math.round((( +new Date - tasks.startTime[self.taskName]) / 1000) % 60);
			console.log(`${self.taskName.toUpperCase()} компилировался ${compileTime} сек`);
			if (--tasks.howManyTasksWork === 0) {
				browserSync.reload();
			}
		}
	}

	src(srcFileName) {
		//Если указан файл то src и будет этот файл, если же это целая директория, то она будет формировать динамически циклом
		return fs.statSync(this.pagesSrc).isFile() ?
			this.pagesSrc
		:
			`${this.pagesSrc}/${srcFileName}`
		;
	}

	taskLogic(logic) {
		const self = this;
		let filesWithFolders = [];
		tasks.startTime[self.taskName] = 0;
		gulp.task(self.taskName, () => {
			//Проверка на то, чем является обрабатываемый элемент, папкой или файлом
			let files = [];
			if (fs.statSync(self.pagesSrc).isFile()) {
				files[0] = pathBaseModule.basename(self.pagesSrc);
			} else {
				filesWithFolders = fs.readdirSync(self.pagesSrc);
				filesWithFolders.forEach((file, i) => {
					if (fs.statSync(`${self.pagesSrc}/${file}`).isFile()) {
						files.push(file);
					}
				});
			}
			self.finalAmountFiles = files.length;
			files.forEach(logic.bind(self));
		});
	}
}

//less
new Pages(`less`, path.src.pages__less).taskLogic(function (value) {
	let self = this;
	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			// .pipe(gp_sourcemaps.init())
			.pipe(less())
			// .pipe(gp_sourcemaps.write())
			.pipe(gulp.dest(path.dist.cssDev))
			.on(`end`, () => self.reloadBrowser());
});

//lessLib
new Pages(`lessLib`, path.src.lessLib).taskLogic(function (value) {
	const self = this;

	gulp.src(self.src(value))
				.pipe(plumber({
					errorHandler: function (err) {
						console.log(err);
						this.emit(`end`);
					}
				}))
				// .pipe(gp_sourcemaps.init())
				.pipe(less())
				// .pipe(gp_sourcemaps.write())
				.pipe(gulp.dest(path.dist.cssDev))
				.on(`end`, () => self.reloadBrowser());

});

//phpProd
new Pages(`phpProd`, path.src.pages__php).taskLogic(function (value) {
	const self = this;
	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(php2html())
			.pipe(gulp.dest(path.dist.html))
			.on(`end`, () => self.reloadBrowser());
});

//php
new Pages(`php`, path.src.pages__php).taskLogic(function (value) {
	//Если без setTimeout то compile из preventDoubleCompileAndReload будет отрабатывать быстрее его и все пойдет прахом
	setTimeout(() => {
		this.reloadBrowser();
	}, 100);

});

//js
new Pages(`js`, path.src.pages__js).taskLogic(function (value) {
	const self = this;

	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(sourcemaps.init({loadMaps: true}))
			.pipe(include())
			.pipe(sourcemaps.write(`./`))
			.pipe(gulp.dest(path.dist.jsDev))
			.on(`end`, () => self.reloadBrowser());
});

//jsProd
new Pages(`jsProd`, path.src.pages__js).taskLogic(function (value) {
	const self = this;

	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			// .pipe(sourcemaps.init({loadMaps: true}))
			.pipe(include())
			.pipe(babel({
				compact: true,
				presets: [`es2015`]
			}))
			// .pipe(sourcemaps.write(`./`))
			.pipe(gulp.dest(path.dist.js))
			.on(`end`, () => self.reloadBrowser());
});

//jsLib
new Pages(`jsLib`, path.src.jsLib).taskLogic(function (value) {

	const self = this;

	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			.pipe(sourcemaps.init({loadMaps: true}))
			.pipe(include())
			.pipe(sourcemaps.write(`./`))
			.pipe(gulp.dest(path.dist.jsDev))
			.on(`end`, () => self.reloadBrowser());

});

//jsProdLib
new Pages(`jsLibProd`, path.src.jsLib).taskLogic(function (value) {

	const self = this;

	gulp.src(self.src(value))
			.pipe(plumber({
				errorHandler: function (err) {
					console.log(err);
					this.emit(`end`);
				}
			}))
			// .pipe(sourcemaps.init({loadMaps: true}))
			.pipe(include())
			.pipe(babel({
				compact: true,
				presets: [`es2015`]
			}))
			// .pipe(sourcemaps.write(`./`))
			.pipe(gulp.dest(path.dist.js))
			.on(`end`, () => self.reloadBrowser());

});

//lessProd
new Pages(`lessProd`, path.src.pages__less).taskLogic(function (value) {
	const self = this,
			processors = [
				autoprefixer({
					browsers: `last 2 version`
				}),
				pxtorem({
					prop_white_list: []
				}),
				cssnano()
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
			.pipe(gp_sourcemaps.write())
			.pipe(gulp.dest(path.dist.css))
			.on(`end`, () => self.reloadBrowser());
});

//lessLibProd
new Pages(`lessLibProd`, path.src.lessLib).taskLogic(function (value) {

	const self = this,
			processors = [
		autoprefixer({
			browsers: `last 2 version`
		}),
		pxtorem({
			prop_white_list: []
		}),
		cssnano()
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
			.pipe(gp_sourcemaps.write())
			.pipe(gulp.dest(path.dist.css))
			.on(`end`, () => self.reloadBrowser());

});

gulp.task(`prod`, () => {

	preventDoubleCompileAndReload({
		task: `lessProd`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `lessLibProd`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `less`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `lessLib`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `jsProd`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `jsLibProd`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `js`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `jsLib`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `phpProd`,
		onceRunLogic: true
	});

	gulp.start(`img`);

});

gulp.task(`onceRunLogic`, () => {

	preventDoubleCompileAndReload({
		task: `lessLib`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `less`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `js`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `jsLib`,
		onceRunLogic: true
	});

	preventDoubleCompileAndReload({
		task: `php`,
		onceRunLogic: true
	});

});

//Эти задачи нет смысла пихать в класс Pages, так при каждой итерации(а она будет происходить на каждый файл) будет отрабатывать вся логика, а логика расчитана на все файлы сразу.
gulp.task(`fonts`, () => {
	del.sync(path.dist.fonts);
	//Проверка на существование и последующее создание папки
	try {
		fs.mkdirSync(`dist/fonts`);
	} catch(e) {
		fs.mkdirSync(`dist`);
		fs.mkdirSync(`dist/fonts`);
	}

	ncp(path.src.fonts, path.dist.fonts, err => {
		if (err) console.error(err);
		console.log('Шрифты скопированы!');
	});
});

gulp.task(`img`, () => {
	del.sync(path.dist.img);
	//Проверка на существование и последующее создание папки
	try {
		fs.mkdirSync(`dist/img`);
	} catch(e) {
		fs.mkdirSync(`dist`);
		fs.mkdirSync(`dist/img`);
	}

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
gulp.task(`default`, () =>
	del(path.dist.rootFolder).then( () => {
		gulp.start(`onceRunLogic`);
		gulp.start(`fonts`);
		gulp.start(`img`);
		gulp.start(`watch`);
	})
);


gulp
		.task(`watch`, () => {

			browserSync.init({
				port: path.browserSync.port,
				proxy: path.browserSync.URI,
				ui: false
			});

			preventDoubleCompileAndReload({
				src: [
					path.src.watch__less,
					`!src/less/lib/**/*.less`,
					`!src/less/lego/common/**/*.less`,
					`!src/less/lib.less`
				],
				task: `less`
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__lessLib,
				task: `lessLib`
			});

			preventDoubleCompileAndReload({
				src: [
					path.src.watch__js,
					`!src/js/lego/common/*.js`,
					`!src/js/lib.js`
				],
				task: `js`
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__jsLib,
				task: `jsLib`
			});

			preventDoubleCompileAndReload({
				src: path.src.watch__php,
				task: `php`
			});

			watch(path.src.watch__fonts, () => gulp.start(`fonts`));
			watch(path.src.watch__img, () => gulp.start(`img`));

		});