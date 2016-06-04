(function (d, w, WOW) {
	'use strict';

	var stickyElements = d.querySelectorAll('.sticky'),
		arrowDown = d.querySelectorAll('.jonmircha p')[2],
		helloFirstArticle = d.querySelector('.hello article'),
		menu = d.querySelector('#menu'),
		links = d.querySelectorAll('a[data-scroll]'),
		printBtn = d.querySelector('#print'),
		wow = new WOW();

	function toggleMenu() {
		return (w.scrollY >= d.querySelector('.hello').getBoundingClientRect().top) ? menu.style.opacity = 1 : menu.style.opacity = 0;
	}

	w.onload = function () {
		wow.init();
		
		setTimeout(function () {
			arrowDown.classList.remove('animated', 'wow', 'fadeIn');
			helloFirstArticle.classList.remove('animated', 'wow', 'zoomInDown');
		}, 2000);
		
		for (var i = stickyElements.length - 1; i >= 0; i--) {
			Stickyfill.add(stickyElements[i]);
		}

		for (var n = 0; n < links.length; n++) {
			links[n].addEventListener('click', function (e) {
				e.preventDefault();
				console.log(e.target,e);

				if ( e.target.id == 'arrow-down' || e.target.classList.contains('fa-chevron-down') ) {
					menu.style.opacity = 1;
				} else if ( e.target.id == 'jonmircha-btn' || e.target.classList.contains('fa-home') || e.target.textContent == 'jonmircha' ) {
					menu.style.opacity = 0;
				}
			});
		}

		smoothScroll.init({
			//updateURL : true,
			//speed : 500
		});

		printBtn.onclick = function (e) {
			e.preventDefault();
			w.print();
			return false;
		}
	}

	w.onscroll = toggleMenu;
	w.onresize = toggleMenu;
})(document, window, WOW);
/* Google Analytics */
var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-28315572-1']);
	_gaq.push(['_setDomainName', 'jonmircha.com']);
	_gaq.push(['_trackPageview']);
	(function(){
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();