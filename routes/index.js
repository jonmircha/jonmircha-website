var express = require("express");
var router = express.Router();

router.get("/",function (req, res){
	res.render("index");
});

router.get("/en",function (req,res){
	res.render("en");
});

router.get("/vlog",function (req,res){
	res.render("vlog");
});

router.get("/Bryan",function (req,res){
	res.render("Bryan");
});

router.use(function (req,res){
	var error = new Error();
	error.status = 404;

	res.render("error");
});

module.exports = router;