'use strict'

var express = require( 'express' ),
	controller = require( './controller' ),
	router = express.Router()

router
	.get( '/', controller.getEs )
	.get( '/en', controller.getEn )
	.use( controller.error404 )

module.exports = router