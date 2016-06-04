const fs = require('fs'),
	gulp = require('gulp'),
	browserSync = require('browser-sync').create();
	concat = require('gulp-concat'),
	uncss = require('gulp-uncss'),
	cleanCSS = require('gulp-clean-css'),
	useref = require('gulp-useref'),
	uglify = require('gulp-uglify'),
	imagemin = require('gulp-imagemin'),
	jade = require('gulp-jade'),
	rename = require('gulp-rename'),
	srcPath = './src/',
	distPath = './dist/',
	staticsPath = './statics/',
	cssFiles = [
		'./src/font-awesome.min.css',
		'./src/responsimple.min.css',
		'./src/animate.min.css',
		'./src/jonmircha.css'
	],
	jsFiles = [
		'./src/stickyfill.min.js',
		'./src/wow.min.js',
		'./src/smooth-scroll.min.js',
		'./src/jonmircha.js'
	],
	minCSS = 'jonmircha.min.css',
	minJS = 'jonmircha.min.js',
	uncssOptions = { html : [`${distPath}*.html`] };

gulp.task('start', () => {
	browserSync.init({
		server : distPath
	});

	gulp.watch([`${srcPath}*.+(jade|json)`], ['jade']);
	gulp.watch([`${srcPath}*.js`], ['js']);
	gulp.watch([`${srcPath}*.css`], ['css']);
	gulp.watch([`${srcPath}*.css`], ['print-css']);
});

gulp.task('statics', () => {
	gulp
		.src([
			`${staticsPath}*.*`,
			`${staticsPath}.htaccess`
		])
		.pipe( useref() )
		.pipe( gulp.dest(distPath) );
});

gulp.task('img', () => {
	gulp
		.src([`${staticsPath}img/*.*`])
		.pipe( imagemin() )
		.pipe( gulp.dest(`${distPath}img/`) );	
});

gulp.task('print-css', () => {
	gulp
		.src(['./src/font-awesome.min.css', './src/print.css'])
		.pipe( concat('print.min.css') )
		.pipe( uncss(uncssOptions) )
		.pipe( cleanCSS() )
		//.pipe( rename('print.min.css') )
		.pipe( gulp.dest(distPath) )
		.on('end', browserSync.reload);
});

gulp.task('css', () => {
	gulp
		.src(cssFiles)
		.pipe( concat(minCSS) )
		.pipe( uncss(uncssOptions) )
		.pipe( cleanCSS() )
		.pipe( gulp.dest(distPath) )
		.on('end', browserSync.reload);
});

gulp.task('js', () => {
	gulp
		.src( jsFiles )
		.pipe( concat(minJS) )
		.pipe( uglify() )
		.pipe( gulp.dest(distPath) )
		.on('end', browserSync.reload);
});

gulp.task('jade', () => {
	fs.readFile('./src/jonmircha.json', 'utf8', (err, data) => {
		let jonmircha = JSON.parse(data),
			esTemplate = {
				pretty: false,
				locals: {
					lang : jonmircha.langEs,
					alias : jonmircha.alias,
					title : jonmircha.titleEs,
					description : jonmircha.descriptionEs,
					slogan : jonmircha.sloganEs,
					imageAvatar : jonmircha.imageAvatar,
					socialMedia : jonmircha.socialMedia,
					menu : jonmircha.menuEs,
					helloTitle : jonmircha.helloTitleEs,
					helloDescription : jonmircha.helloDescriptionEs,
					resumeTitle : jonmircha.resumeTitleEs,
					resumeIAmTitle : jonmircha.resumeIAmTitleEs,
					resumeIAm : jonmircha.resumeIAmEs,
					resumeServicesTitle : jonmircha.resumeServicesTitleEs,
					resumeServices : jonmircha.resumeServicesEs,
					resumeSkillsTitle : jonmircha.resumeSkillsTitleEs,
					resumeSkills : jonmircha.resumeSkills,
					resumeExperienceTitle : jonmircha.resumeExperienceTitleEs,
					resumeExperienceTitleCurrent : jonmircha.resumeExperienceTitleCurrentEs,
					resumeExperienceCurrent : jonmircha.resumeExperienceCurrentEs,
					resumeExperienceTitleAbove : jonmircha.resumeExperienceTitleAboveEs,
					resumeExperienceAbove : jonmircha.resumeExperienceAboveEs,
					worksTitle : jonmircha.worksTitleEs,
					projectsTitle : jonmircha.projectsTitleEs,
					projects : jonmircha.projectsEs,
					sitesTitle : jonmircha.sitesTitleEs,
					sites : jonmircha.sites,
					lecturesTitle : jonmircha.lecturesTitleEs,
					lectures : jonmircha.lectures,
					articlesTitle : jonmircha.articlesTitleEs,
					articles : jonmircha.articles,
					customersTitle : jonmircha.customersTitleEs,
					customers : jonmircha.customers,
					marathonsTitle : jonmircha.marathonsTitleEs,
					marathons : jonmircha.marathons
				}
			},
			enTemplate = {
				pretty: false,
				locals: {
					lang : jonmircha.langEn,
					alias : jonmircha.alias,
					title : jonmircha.titleEn,
					description : jonmircha.descriptionEn,
					slogan : jonmircha.sloganEn,
					imageAvatar : jonmircha.imageAvatar,
					socialMedia : jonmircha.socialMedia,
					menu : jonmircha.menuEn,
					helloTitle : jonmircha.helloTitleEn,
					helloDescription : jonmircha.helloDescriptionEn,
					resumeTitle : jonmircha.resumeTitleEn,
					resumeIAmTitle : jonmircha.resumeIAmTitleEn,
					resumeIAm : jonmircha.resumeIAmEn,
					resumeServicesTitle : jonmircha.resumeServicesTitleEn,
					resumeServices : jonmircha.resumeServicesEn,
					resumeSkillsTitle : jonmircha.resumeSkillsTitleEn,
					resumeSkills : jonmircha.resumeSkills,
					resumeExperienceTitle : jonmircha.resumeExperienceTitleEn,
					resumeExperienceTitleCurrent : jonmircha.resumeExperienceTitleCurrentEn,
					resumeExperienceCurrent : jonmircha.resumeExperienceCurrentEn,
					resumeExperienceTitleAbove : jonmircha.resumeExperienceTitleAboveEn,
					resumeExperienceAbove : jonmircha.resumeExperienceAboveEn,
					worksTitle : jonmircha.worksTitleEn,
					projectsTitle : jonmircha.projectsTitleEn,
					projects : jonmircha.projectsEn,
					sitesTitle : jonmircha.sitesTitleEn,
					sites : jonmircha.sites,
					lecturesTitle : jonmircha.lecturesTitleEn,
					lectures : jonmircha.lectures,
					articlesTitle : jonmircha.articlesTitleEn,
					articles : jonmircha.articles,
					customersTitle : jonmircha.customersTitleEn,
					customers : jonmircha.customers,
					marathonsTitle : jonmircha.marathonsTitleEn,
					marathons : jonmircha.marathons
				}
			};
	
		gulp
			.src(`${srcPath}index.jade`)
			.pipe( jade(esTemplate) )
			.pipe( rename('index.html') )
			.pipe( gulp.dest(distPath) )
			.on('end', browserSync.reload);

		gulp
			.src(`${srcPath}index.jade`)
			.pipe( jade(enTemplate) )
			.pipe( rename('en.html') )
			.pipe( gulp.dest(distPath) )
			.on('end', browserSync.reload);
	});
});

gulp.task('all', ['statics', 'img', 'css', 'js', 'jade']);