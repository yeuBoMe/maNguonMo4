jQuery(document).ready(function ($) {

	var owl = jQuery('.banner .owl-carousel');
		owl.owlCarousel({
			margin:20,
			nav: true,
			autoplay : true,
			lazyLoad: true,
			autoplayTimeout: 3000,
			loop: true,
			dots:false,
			navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i> '],
			responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		},
		autoplayHoverPause : true,
		mouseDrag: true
	});

	var owl = jQuery('.our-classes .owl-carousel');
		owl.owlCarousel({
			margin:100,
			nav: false,
			autoplay : true,
			lazyLoad: true,
			autoplayTimeout: 3000,
			loop: true,
			dots:false,
			navText : ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i> '],
			responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2,
				margin:30
			},
			1000: {
				items: 2,
				margin:30
			}
		},
		autoplayHoverPause : true,
		mouseDrag: true
	});

	$('.mobile-nav .toggle-button').on( 'click', function() {
		$('.mobile-nav .main-navigation').slideToggle();
	});

	$('.mobile-nav-wrap .close ').on( 'click', function() {
		$('.mobile-nav .main-navigation').slideToggle();

	});

	$('<button class="submenu-toggle"></button>').insertAfter($('.mobile-nav ul .menu-item-has-children > a'));
	$('.mobile-nav ul li .submenu-toggle').on( 'click', function() {
		$(this).next().slideToggle();
		$(this).toggleClass('open');
	});

	//accessible menu for edge
	 $("#site-navigation ul li a").on( 'focus', function() {
	   $(this).parents("li").addClass("focus");
	}).on( 'blur', function() {
	    $(this).parents("li").removeClass("focus");
	 });
});

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

window.addEventListener('load', (event) => {
    jQuery(".preloader").delay(1000).fadeOut("slow");
});

jQuery(window).scroll(function() {
    var data_sticky = jQuery('.nav-head').attr('data-sticky');

    if (data_sticky == 1) {
      if (jQuery(this).scrollTop() > 1){  
        jQuery('.nav-head').addClass("sticky-head");
      } else {
        jQuery('.nav-head').removeClass("sticky-head");
      }
    }
});

function prime_fashion_magazine_preloder_function() {
    setTimeout(function() {           
        document.getElementById("page-top").scrollIntoView();
        
        $('#ctn-preloader').addClass('loaded');  
        // Once the preloader has finished, the scroll appears 
        $('body').removeClass('no-scroll-y');

        if ($('#ctn-preloader').hasClass('loaded')) {
            // It is so that once the preloader is gone, the entire preloader section will removed
            $('#preloader').delay(1000).queue(function() {
                $(this).remove();
                
                // If you want to do something after removing preloader:
                prime_fashion_magazine_afterload();
                
            });
        }
    }, 3000);
}
function prime_fashion_magazine_afterload() {
    // After Load function body!
}