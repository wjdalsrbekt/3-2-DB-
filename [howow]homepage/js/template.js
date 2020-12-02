jQuery(function($) {

	/* =============== SHOW / HIDE FORM SEARCH =============== */
	$("header .nino-search, #nino-searchForm .nino-close").click(function(){
		$("#nino-searchForm").toggleClass("open");
	});
	
	/* =============== SHOW / HIDE FORM SERVICE =============== */
	$("header .nino-service, #nino-serviceForm .nino-close").click(function(){
		$("#nino-serviceForm").toggleClass("open");
	});
	
	/* =============== SHOW / HIDE FORM SERVICE2 =============== */
	$("header .nino-service2, #nino-serviceForm2 .nino-close").click(function(){
		$("#nino-serviceForm2").toggleClass("open");
	});
	
	/* =============== SHOW / HIDE FORM SERVICE3 =============== */
	$("header .nino-service3, #nino-service3Form .nino-close").click(function(){
		$("#nino-service3Form").toggleClass("open");
	});
	
	/* =============== SHOW / HIDE GOOGLE MAP =============== */
	$("#nino-map .nino-sectionHeading").click(function(){
		$("#nino-map").toggleClass("showMap");
		$(this).find(".text").toggle();
	});

	/* =============== TESTIMONIAL SLIDER =============== */
	$('.nino-testimonialSlider').unslider({
		nav: false,
		arrows: {
			//  Unslider default behaviour
			prev: '<a class="unslider-arrow prev"><i class="mdi mdi-chevron-left"></i></a>',
			next: '<a class="unslider-arrow next"><i class="mdi mdi-chevron-right"></i></a>',
		}
	});

	/* =============== CUSTOM SCROLLBAR STYLE =============== */
	$("#nino-whatWeDo .panel-body").mCustomScrollbar({
		theme:"default"
	});

	/* =============== MAKE MAIN MENU STICKED ON TOP WHEN SCROLL =============== */
	$(window).scroll(function () {
		if ($(this).scrollTop() == $('#nino-header').height() || $(this).scrollTop() > $('#nino-header').height()) {
			$('body').addClass("nino-fixed-nav");
			$('body').css('padding-top', $('#nino-navbar').height() + 'px');
		} else {
			$('body').removeClass("nino-fixed-nav");
			$('body').css('padding-top', 0);
		}
	});
	
	/* =============== ISOTOP =============== */	
	$(window).load(function(){
		$portfolio = $('.nino-portfolioItems');
		$portfolio.isotope({
			itemSelector : 'li',
			layoutMode : 'masonry'
		});

	});
	
	/* =============== PORTFOLIO HOVER EFFECT =============== */
	$('.nino-portfolioItems > li').each( function() { $(this).hoverdir(); } );
	
	/* =============== SMOOTH SCROOL EFFECT =============== */
	$('#nino-navbar ul li a').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	/* =============== SHOW / HIDE GO TO TOP =============== */
	/* Check to see if the window is top if not then display go top button */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('#nino-scrollToTop').fadeIn();
		} else {
			$('#nino-scrollToTop').fadeOut();
		}
	});
	/* Click event to scroll to top */
	$('#nino-scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});