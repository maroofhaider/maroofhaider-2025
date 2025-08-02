//loading for show home page content
// $(window).on("load", function() {
// 	$('body').addClass('visible');
// });

document.addEventListener("DOMContentLoaded", function () {
	document.body.classList.add('visible');
});


$(document).ready(function () {
	//Init Scrollbar Position
	$(window).scroll(scrollHandler);
	
	//-----------------------------
	//Responsive slide navigation
	//-----------------------------
	let isLenisStopped = false;

	$(".menu-icon, .menu-slide li a").click(function () {
		// Toggle the state
		isLenisStopped = !isLenisStopped;

		if (isLenisStopped) {
			lenis.stop(); // Stop Lenis scrolling, assuming it affects body scrolling
		} else {
			lenis.start(); // Start Lenis scrolling, assuming it affects body scrolling
		}

		// Toggle classes
		$("body").toggleClass("noScroll");
		$(".menu-slide").toggleClass("show-menu");
		$(".menu-icon").toggleClass("open");
	});

	$(".menu-slide li").click(function () {
		lenis.start()
		$(".menu-slide").removeClass("show-menu");
		$(".menu-icon").removeClass("open");
	});


	$('#mhTestimonials').owlCarousel({
		loop: true,
		autoplay: true,
		items: 1,
		margin: 30,
		// dots:  false
	});
	
	$('#cbd-carousel').owlCarousel({
		loop: true,
		autoplay:true,
		autoplayTimeout:1000,
		autoplayHoverPause:true,
		items: 3,
		margin: 0,
		nav:false,
		dots:false,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:2,
			},
			1000:{
				items:3,
			},
			1600:{
				items:4,
			}
		}
	});

	
	
});


$("#t_web").click(function () {
	$("#t_logo, #t_email").removeClass("active");
	$("#t_web").addClass("active");
	$("#logo_package, #email_package").hide();
	$("#web_package").fadeIn(500);
});

$("#t_logo").click(function () {
	$("#t_web, #t_email").removeClass("active");
	$("#t_logo").addClass("active");
	$("#web_package, #email_package").hide();
	$("#logo_package").fadeIn(500);
});

$("#t_email").click(function () {
	$("#t_logo, #t_web").removeClass("active");
	$("#t_email").addClass("active");
	$("#web_package, #logo_package").hide();
	$("#email_package").fadeIn(500);
});

gsap.registerPlugin(ScrollTrigger);

//--------------------------------------------
// Start sticky header animation scroll GSAP
//--------------------------------------------

// ScrollTrigger.create({
// 	trigger: 'main',
// 	start: "top 17%",
// 	toggleClass: { targets: "header", className: "s-t-i-c-k-y" },
// })

$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    //>=, not <=
    if (scroll >= 150) {
        $("header").addClass('s-t-i-c-k-y');
    }
    if (scroll <= 100) {
        $("header").removeClass('s-t-i-c-k-y');
    }
});

//------------------------------------
//Target width Anchor Smooth Scroll
//------------------------------------

$('a[href*="#"]:not([href="#"])').click(function () {
	if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top - 50
			}, 1000);
			return false;
		}
	}
});

//Show Div Animation on Scrollbar Position
function scrollHandler(){
	var thresholdValueDown = -500;
	var thresholdValueUp = 550;
	$('#Services').each(function (idx) {
		if ((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueDown) {
			$(this).addClass("anim");

		}
		// else if((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueUp) {
		// 	$(this).removeClass("anim");
		// }
	});

	// $('#Portfolio').each(function (idx) {
	// 	if ((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueDown) {
	// 		$(this).addClass("nightTheme");

	// 	}
	// 	else if((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueUp) {
	// 		$(this).removeClass("nightTheme");
	// 	}
	// });

	$('#About').each(function (idx) {
		if ((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueDown) {
			$(this).addClass("anim");

		}
		// else if((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueUp) {
		// 	$(this).removeClass("anim");
		// }
	});

	$('#Testimonial').each(function (idx) {
		if ((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueDown) {
			$(this).addClass("anim");

		}
		// else if((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueUp) {
		// 	$(this).removeClass("anim");
		// }
	});

	$('#CbdEmail').each(function (idx) {
		if ((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueDown) {
			$(this).addClass("anim");

		}
		else if((($(this).offset().top - $(window).height()) - ($(window).scrollTop())) <= thresholdValueUp) {
			$(this).removeClass("anim");
		}
	});
	
}


//----------------------------------------------
// for basic lenis init for smooth scrolling
//----------------------------------------------
const lenis = new Lenis()

lenis.on('scroll', (e) => {
	//   console.log(e)
})

function raf(time) {
	lenis.raf(time)
	requestAnimationFrame(raf)
}

requestAnimationFrame(raf)