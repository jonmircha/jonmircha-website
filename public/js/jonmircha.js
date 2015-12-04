<<<<<<< HEAD
$(document).on('ready', function (){
	function gotoSection(btn, section)
	{
		$(btn).on('click', function (e){
			e.preventDefault()

			if(section == '#jonmircha')
			{
				$('body, html').animate({
					scrollTop : 0
				}, 'swing')
			}
			else
			{
				$('body, html').animate({
					scrollTop : $(section).offset().top
				}, 'swing')
			}
		})
	}

	gotoSection('#jonmircha-btn','#jonmircha');
	gotoSection('#hello-btn','#hello');
	gotoSection('#resume-btn','#resume');
	gotoSection('#projects-btn','#projects');
	gotoSection('#customers-btn','#customers');
	gotoSection('#marathons-btn','#marathons');
	gotoSection('#arrow-down','#hello');
	
	$('#print').on('click', function (e){
		e.preventDefault()
		window.print()
		return false
	});
});

$(window).on('scroll', function (){ 
	return ( $(window).scrollTop() > $('#hello').offset().top - 64 ) ? $('#menu').fadeIn() : $('#menu').fadeOut()
})
=======
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
>>>>>>> 9d202d7b472544d347cb55da7ae14a3f2500e2c0
