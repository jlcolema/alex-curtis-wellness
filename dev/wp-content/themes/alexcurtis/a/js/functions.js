
/*-------------------------------------------
	Browser Detection
-------------------------------------------*/

// For when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


/*-------------------------------------------
	General Functions
-------------------------------------------*/


(function($){


	/* On Page Ready */

	$(document).ready(function (){


		/*-------------------------------------------
			Nav Toggle
		-------------------------------------------*/

		// Notes...


		$("#nav").find(".toggle").click(function() {

			// On-click, add a class of "open" to the parent container.

			$(this).parent().toggleClass("open");

		});


		/*-------------------------------------------
			Pre-Footer Toggle
		-------------------------------------------*/

		// Notes...


		$("#pre-footer").find(".toggle").click(function() {

			// On-click, add a class of "open" to the parent container.

			$(this).parent().toggleClass("open");

		});


		/*-------------------------------------------
			Custom Logo Adjustments
		-------------------------------------------*/

		// Notes...


		$("#logo div").lettering('words');


		/*-------------------------------------------
			Photo Zoom
		-------------------------------------------*/

		// Notes...


		$(".fancybox").fancybox({

			beforeShow : function() {

        		var alt = this.element.find('img').attr('alt');

		        this.inner.find('img').attr('alt', alt);

		        this.title = alt;

    		}

		});


		/*-------------------------------------------
			Smooth Scrolling
		-------------------------------------------*/

		// Miscellaneous calls to make scrolling smooth.


		$(function(){

			$(".to-top a").bind("click", function (event) {

				event.preventDefault ? event.preventDefault() : event.returnValue = false;

				var target = $(this).attr("href");

				$("html, body").stop().animate({

					scrollLeft: $(target).offset().left,
					scrollTop: $(target).offset().top

				}, 600, function() {

					// $("body").addClass("fixed");

				});

			});

		});


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Add class of "dev" to <body>


		// $("body").addClass("dev");


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#footer").after('<div id="dev"></div>');

		// $("#dev").text(windowSize);


	});


	/* On Page Load */


	$(window).load(function() {


		/*-------------------------------------------
			Featured Slides
		-------------------------------------------*/

		// Displayed on home page.


		$("#featured").find(".flexslider").flexslider({

			animation: "fade",
			slideshowSpeed: 9000,
			useCSS: false,
			start: function(slider){

				$("body").removeClass("loading");

			}

		});


		/*-------------------------------------------
			Testimonials
		-------------------------------------------*/

		// Displayed on home page.


		$("#testimonials").find(".flexslider").flexslider({

			animation: "slide",
			slideshow: false,
			useCSS: false,
			directionNav: false,
			smoothHeight: true,
			start: function(slider){

				$("body").removeClass("loading");

			}

		});


	});


	/* On Window Resize */


	$(window).resize(function() {


		/*-------------------------------------------
			Screen Size
		-------------------------------------------*/


		// Displays screen size on the fly.


		// var windowSize = $(window).width();

		// $("#dev").text(windowSize);


	});


})(window.jQuery);