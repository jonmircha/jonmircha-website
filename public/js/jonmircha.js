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