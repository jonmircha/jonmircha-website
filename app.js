'use strict'

var express = require( 'express' ),
	routes = require( './routes' ),
	publicDir = express.static( `${__dirname}/public` ),
	viewDir = `${__dirname}/views`,
	port = ( process.env.PORT || 3000 ),
	app = express()

app
	.set( 'views', viewDir )
	.set( 'view engine', 'jade' )
	.set( 'port', port )

	.use( publicDir )
	.use( routes )

module.exports = app