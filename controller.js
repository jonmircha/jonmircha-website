'use strict'

var config = require('./config'),
	ControllerJonMirCha = () => {}

ControllerJonMirCha.getEs = ( req, res, next ) => {
	let data = {
		lang : config.langEs,
		alias : config.alias,
		title : config.titleEs,
		description : config.descriptionEs,
		slogan : config.sloganEs,
		imageAvatar : config.imageAvatar,
		socialMedia : config.socialMedia,
		menu : config.menuEs,
		helloTitle : config.helloTitleEs,
		helloDescription : config.helloDescriptionEs,
		resumeTitle : config.resumeTitleEs,
		resumeIAmTitle : config.resumeIAmTitleEs,
		resumeIAm : config.resumeIAmEs,
		resumeServicesTitle : config.resumeServicesTitleEs,
		resumeServices : config.resumeServicesEs,
		resumeSkillsTitle : config.resumeSkillsTitleEs,
		resumeSkills : config.resumeSkills,
		resumeExperienceTitle : config.resumeExperienceTitleEs,
		resumeExperienceTitleCurrent : config.resumeExperienceTitleCurrentEs,
		resumeExperienceCurrent : config.resumeExperienceCurrentEs,
		resumeExperienceTitleAbove : config.resumeExperienceTitleAboveEs,
		resumeExperienceAbove : config.resumeExperienceAboveEs,
		projectsTitle : config.projectsTitleEs,
		projectDescription : config.projectDescriptionEs,
		sitesTitle : config.sitesTitleEs,
		sites : config.sites,
		coursesTitle : config.coursesTitleEs,
		courses : config.courses,
		slidesTitle : config.slidesTitleEs,
		slides : config.slides,
		lecturesTitle : config.lecturesTitleEs,
		lectures : config.lectures,
		articlesTitle : config.articlesTitleEs,
		articles : config.articles,
		customersTitle : config.customersTitleEs,
		customers : config.customers,
		marathonsTitle : config.marathonsTitleEs,
		marathons : config.marathons
	}

	res.render( 'index', data )
}

ControllerJonMirCha.getEn = ( req, res, next ) => {
	let data = {
		lang : config.langEn,
		alias : config.alias,
		title : config.titleEn,
		description : config.descriptionEn,
		slogan : config.sloganEn,
		imageAvatar : config.imageAvatar,
		socialMedia : config.socialMedia,
		menu : config.menuEn,
		helloTitle : config.helloTitleEn,
		helloDescription : config.helloDescriptionEn,
		resumeTitle : config.resumeTitleEn,
		resumeIAmTitle : config.resumeIAmTitleEn,
		resumeIAm : config.resumeIAmEn,
		resumeServicesTitle : config.resumeServicesTitleEn,
		resumeServices : config.resumeServicesEn,
		resumeSkillsTitle : config.resumeSkillsTitleEn,
		resumeSkills : config.resumeSkills,
		resumeExperienceTitle : config.resumeExperienceTitleEn,
		resumeExperienceTitleCurrent : config.resumeExperienceTitleCurrentEn,
		resumeExperienceCurrent : config.resumeExperienceCurrentEn,
		resumeExperienceTitleAbove : config.resumeExperienceTitleAboveEn,
		resumeExperienceAbove : config.resumeExperienceAboveEn,
		projectsTitle : config.projectsTitleEn,
		projectDescription : config.projectDescriptionEn,
		sitesTitle : config.sitesTitleEn,
		sites : config.sites,
		coursesTitle : config.coursesTitleEn,
		courses : config.courses,
		slidesTitle : config.slidesTitleEn,
		slides : config.slides,
		lecturesTitle : config.lecturesTitleEn,
		lectures : config.lectures,
		articlesTitle : config.articlesTitleEn,
		articles : config.articles,
		customersTitle : config.customersTitleEn,
		customers : config.customers,
		marathonsTitle : config.marathonsTitleEn,
		marathons : config.marathons
	}

	res.render( 'index', data )
}

ControllerJonMirCha.error404 = ( req, res, next ) => {
	let error = new Error()
	error.status = 404
	
	let data = {
		title : 'Error 404',
		description : 'Parece que Flash se te adelantó, no hay nada por aquí :(',
		error : error
	}

	res.render( 'error', data )
}

module.exports = ControllerJonMirCha