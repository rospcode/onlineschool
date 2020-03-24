$(document).ready(function() {
    'use strict';

    /*==========================================================
		 Pre-Loader
	==========================================================*/



    /*==========================================================
		 Smooth scroll
	==========================================================*/
    $('a[href*="#"]:not([href="#"]):not(a[data-toggle="collapse"]):not([data-toggle="tab"])').on('click', function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    /*==========================================================
		 Go To Top
	==========================================================*/

	$(window).scroll(function() {
	   if ($(this).scrollTop() > 200) {
		  $('#go-to-top a').fadeIn('slow');
		  } else {
		  $('#go-to-top a').fadeOut('slow');
		}
	});

	$('#go-to-top a').on( "click",function(){
	  $("html,body").animate({ scrollTop: 0 }, 750);
	  return false;
	});

    /*==========================================================
		 WOW
	==========================================================*/

	var wow = new WOW(
	{
		mobile: false
	});
	wow.init();

    /*==========================================================
		 Review Carousel
	==========================================================*/
    $('#header-slider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplaySpeed: 2000,
        navSpeed: 2000,
    });

    /*==========================================================
		Countdown
	==========================================================*/
    $('.countdown-time').each(function () {
        var endTime = $(this).data('time');
        $(this).countdown(endTime, function (tm) {
            var countTxt = '';
            var countDay = 484 - (484/365)*(tm.strftime('%D'));
            var countHour = 484 - (484/24)*(tm.strftime('%H'));
            var countMin = 484 - (484/60)*(tm.strftime('%M'));
            var countSec = 484-(484/60)*(tm.strftime('%S'));
            countTxt += '<span class="section_count"><span class="tcount days">%D </span><span class="text">Days</span><svg height="160" width="160"><circle cx="80" cy="80" r="77" stroke="#00c0ff" stroke-width="6" fill="none" stroke-dashoffset="'+countDay+'"/></svg></span>';
            countTxt += '<span class="section_count"><span class="tcount hours">%H</span><span class="text">Hours</span><svg height="160" width="160"><circle cx="80" cy="80" r="77" stroke="#00c0ff" stroke-width="6" fill="none" stroke-dashoffset="'+countHour+'"/></svg></span>';
            countTxt += '<span class="section_count"><span class="tcount minutes">%M</span><span class="text">Mins</span><svg height="160" width="160"><circle cx="80" cy="80" r="77" stroke="#00c0ff" stroke-width="6" fill="none" stroke-dashoffset="'+countMin+'"/></svg></span>';
            countTxt += '<span class="section_count"><span class="tcount seconds">%S</span><span class="text">Secs</span><svg height="160" width="160"><circle cx="80" cy="80" r="77" stroke="#00c0ff" stroke-width="6" fill="none" stroke-dashoffset="'+countSec+'"/></svg></span>';

            $(this).html(tm.strftime(countTxt));
        });
    });

    $('.countdown-time-2').each(function () {
        var endTime = $(this).data('time');
        $(this).countdown(endTime, function (tm) {
            $(this).html(tm.strftime('<span class="section_count"><span class="tcount days">%D </span><span class="text">Days</span></span><span class="section_count"><span class="tcount hours">%H</span><span class="text">Hours</span></span><span class="section_count"><span class="tcount minutes">%M</span><span class="text">Mins</span></span><span class="section_count"><span class="tcount seconds">%S</span><span class="text">Secs</span></span>'));
        });
    });


    /*==========================================================
		 Review Carousel
	==========================================================*/
    $('#review-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
        dots: false,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplaySpeed: 2000,
        navSpeed: 2000,
    });
});
