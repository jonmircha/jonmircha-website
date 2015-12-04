$(document).on("ready",function(){
	function gotoSection(btn,section)
	{
		$(btn).on("click",function(e){
		e.preventDefault();
			$("body, html").animate({
				scrollTop:$(section).offset().top
			},"swing");
		});	
	}

	gotoSection("#arrow-down","#hello-world");
	gotoSection("#btn-vlogs","#vlogs");
	gotoSection("#btn-lectures","#lectures");
	gotoSection("#btn-workshops","#workshops");
	gotoSection("#btn-interviews","#interviews");
	gotoSection("#btn-bextlan","#bextlan");
	
	$("#print").on("click",function(e){
		e.preventDefault();
		window.print();
		return false;
	});
	
});