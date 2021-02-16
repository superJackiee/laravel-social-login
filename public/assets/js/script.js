(function($) {

	"use strict";

	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}


	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.header-menu').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.header-menu');
			var sticky_header = $('.fixed-header .sticky-header');
			var scrollLink = $('.scroll-to-top');
			if (windowpos > 1) {
				siteHeader.addClass('fixed-header');
				sticky_header.addClass("animated slideInDown")
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				sticky_header.removeClass("animated slideInDown")
				scrollLink.fadeOut(300);
			}
		}
	}

	headerStyle();

	//Submenu Dropdown Toggle
	if($('.header-menu li.dropdown ul').length){
		$('.header-menu li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');

		//Dropdown Button
		$('.header-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});

		//Disable dropdown parent link
		$('.header-menu .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}


	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){

			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);

			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}

		},{accY: 0});
	}


	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}


	//Sponsors Carousel
	if ($('.sponsors-carousel').length) {
		$('.sponsors-carousel').owlCarousel({
			"autoplay":true,
            "autoplayTimeout":3000,
			loop:true,
			margin:30,
			nav:false,
			smartSpeed: 700,
			autoplay: true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1200:{
					items:5
				}
			}
		});
	}

	$('.partner-logo').owlCarousel({
			  "autoplay":true,
              "autoplayTimeout":3000,
              loop:true,
              margin:10,
              dots:true,
              autoplay: true,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:2
                  },
                  1000:{
                      items:6
                  }
              }
          })


	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}


	//Gallery Filters
	 if($('.filter-list').length){
	  $('.filter-list').mixItUp({});
	 }

	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);

		});
	}

	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */

	$(window).on('scroll', function() {
		headerStyle();
	});

/* ==========================================================================
   When document is loading, do
   ========================================================================== */

	


function myFunction() {
    document.getElementById("mydropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var opendropdown = dropdowns[i];
      if (opendropdown.classList.contains('show')) {
        opendropdown.classList.remove('show');
      }
    }
  }
}


$(document).ready(function(){
  function buttonUp(){
     var valux = $('.ExpInput').val();
      valux = $.trim(valux).length;
      if(valux !== 0){
        $('.Expbtn').css('z-index','99');
      } else{
        $('.ExpInput').val('');
        $('.Expbtn').css('z-index','-999');
      }
  }
  });

  $(document).ready(function(){
    var submitIcon = $('.ExpIcon');
    var submitInput = $('.ExpInput');
    var searchBox = $('.Exp-serach');
    var isOpen = false;

    $(document).mouseup(function(){
      if(isOpen == true){
      submitInput.val('');
      $('.Expbtn').css('z-index','-999');
      submitIcon.click();
      }
    });

    submitIcon.mouseup(function(){
      return false;
    });

    searchBox.mouseup(function(){
      return false;
    });

    submitIcon.click(function(){
      if(isOpen == false){
        searchBox.addClass('Exp-serach-open');
        isOpen = true;
      } else {
        searchBox.removeClass('Exp-serach-open');
        isOpen = false;
      }
  });

  });




function callback(event) {
    // Provided by the core
    var element   = event.target;         // DOM element, in this example .owl-carousel
    var name      = event.type;           // Name of the event, in this example dragged
    var namespace = event.namespace;      // Namespace of the event, in this example owl.carousel
    var items     = event.item.count;     // Number of items
    var item      = event.item.index;     // Position of the current item
    // Provided by the navigation plugin
    var pages     = event.page.count;     // Number of pages
    var page      = event.page.index;     // Position of the current page
    var size      = event.page.size;      // Number of items per page
}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    autoplay: true,
    autoplayspeed: 3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})
  

  function myFunction() {
	    document.getElementById("mydropdown").classList.toggle("show");
	}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var opendropdown = dropdowns[i];
		      if (opendropdown.classList.contains('show')) {
		        opendropdown.classList.remove('show');
		      }
		    }
		  }
		}


$(document).ready(function(){
    function buttonUp(){
       var valux = $('.ExpInput').val();
        valux = $.trim(valux).length;
        if(valux !== 0){
          $('.Expbtn').css('z-index','99');
        } else{
          $('.ExpInput').val('');
          $('.Expbtn').css('z-index','-999');
        }
    }
    });

    $(document).ready(function(){
      var submitIcon = $('.ExpIcon');
      var submitInput = $('.ExpInput');
      var searchBox = $('.Exp-serach');
      var isOpen = false;

      $(document).mouseup(function(){
        if(isOpen == true){
        submitInput.val('');
        $('.Expbtn').css('z-index','-999');
        submitIcon.click();
        }
      });

      submitIcon.mouseup(function(){
        return false;
      });

      searchBox.mouseup(function(){
        return false;
      });

      submitIcon.click(function(){
        if(isOpen == false){
          searchBox.addClass('Exp-serach-open');
          isOpen = true;
        } else {
          searchBox.removeClass('Exp-serach-open');
          isOpen = false;
        }
    });

    })

	//ico-top filter ==========================//


	var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-21422990-1']);
		_gaq.push(['_setDomainName', 'none']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	
	 
	    $('.portfolioFilter a').click(function(){
	        $('.portfolioFilter .current').removeClass('current');
	        $(this).addClass('current');
	 		var $container = $(".portfolioContainer ");
	        var selector = $(this).attr('data-filter');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                duration: 750,
	                easing: 'linear',
	                queue: false
	            }
	         });
	         return false;
	    }); 

	/* ==========================================================================
	   When document is Scrollig, do
	   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});

	$(window).on('load', function() {
		handlePreloader();
	});

})(window.jQuery);
