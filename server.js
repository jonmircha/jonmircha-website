'use strict'

var app = require( './app' ),
	server = app.listen(
			app.get( 'port' ),
			() => {	console.log( 'Iniciando jonmircha.com' ) }
		)