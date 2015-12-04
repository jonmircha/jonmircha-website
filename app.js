var express = require("express");
var path = require("path");
//var bodyParser = require("body-parser");
//var favicon = require("serve-favicon");
var routes = require("./routes/index");

var app = express();

// parse application/json
//app.use(bodyParser.json());
// parse application/x-www-form-urlencoded
//app.use(bodyParser.urlencoded({ extended: false }));

//me sirve para sobreescribir los métodos de las peticiones HTTP
//app.use(require("express-method-override")("_method"));

//Directorio de archivos estáticos
app.use(express.static(path.join(__dirname, "public")));

//Para colocar mi favicon personalizado
//app.use(favicon(__dirname + "/public/favicon.ico"));

//Directorio de las Vistas
app.set("views", path.join(__dirname, "views"));
//Definir el motor de plantillas para generar las vistas
app.set("view engine", "jade");

//Para configurar el puerto por el que se ejecuta la aplicación 
app.set("port", process.env.PORT || 3000);

//Asigno las rutas (urls) que procesará mi aplicación
app.use("/",routes);

module.exports = app;