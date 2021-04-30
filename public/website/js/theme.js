//  Theme Custom jquery file,

      // Created on   : 29/05/2017.
      // Theme Name   : Right Flooring.
      // Description  : Right Flooring - Flooring and Tiling Services.
      // Version      : 1.0.
      // Author       : @TheMazine.
      // Developed by : Jubayer al hasan. (jubayer.hasan1991@gmail.com)


"use strict";

// Prealoder
 function prealoader () {
   if ($('#loader').length) {
     $('#loader').fadeOut(); // will first fade out the loading animation
     $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
     $('body').delay(350).css({'overflow':'visible'});
  };
 }


// placeholder remove
function removePlaceholder () {
  if ($("input,textarea").length) {
    $("input,textarea").each(
            function(){
                $(this).data('holder',$(this).attr('placeholder'));
                $(this).on('focusin', function() {
                    $(this).attr('placeholder','');
                });
                $(this).on('focusout', function() {
                    $(this).attr('placeholder',$(this).data('holder'));
                });

        });
  }
}



// Counter function
function CounterNumberChanger () {
  var timer = $('.timer');
  if(timer.length) {
    timer.appear(function () {
      timer.countTo();
    })
  }
}



// Theme-banner slider
function BannerSlider () {
  var banner = $("#theme-main-banner");
  if (banner.length) {
    banner.revolution({
      sliderType:"standard",
      sliderLayout:"auto",
      loops:true,
      delay:7000,
      navigation: {
         bullets: {
                    enable:true,
                    hide_onmobile:true,
                    style:"hermes",
                    hide_onleave:false,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:8,
                    tmp:''
                  }

      },
      responsiveLevels:[2220,1183,975,751],
                gridwidth:[1170,970,770,303],
                gridheight:[730,730,730,630],
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  disableFocusListener:false,
                },
    });
  };
}

// Theme-banner slider
function BannerSliderTwo () {
  var banner = $("#theme-main-banner-two");
  if (banner.length) {
    banner.revolution({
      sliderType:"standard",
      sliderLayout:"auto",
      loops:true,
      delay:7000,
      navigation: {
         bullets: {
                    enable:true,
                    hide_onmobile:true,
                    style:"hermes",
                    hide_onleave:true,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:8,
                    tmp:''
                  }

      },
      responsiveLevels:[2220,1183,975,751],
                gridwidth:[1170,970,770,303],
                gridheight:[950,950,950,800],
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  disableFocusListener:false,
                },
    });
  };
}


// Main Menu Function
function themeMenu () {
  var menu= $("#mega-menu-holder");
  if(menu.length) {
    menu.slimmenu({
      resizeWidth: '991',
      animSpeed:'medium',
      indentChildren: true,
    });
  }
}


// Fancybox
function FancypopUp () {
  var popBox = $(".fancybox");
  if (popBox.length) {
      popBox.fancybox({
      openEffect  : 'elastic',
        closeEffect : 'elastic',
         helpers : {
            overlay : {
                css : {
                    'background' : 'rgba(0, 0, 0, 0.6)'
                }
            }
        }
    });
  };
}


// Service Slider
function serviceSlider () {
  var cSlider = $ (".service-slider");
  if(cSlider.length) {
      cSlider.owlCarousel({
        loop:false,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplaySpeed:1200,
        lazyLoad:true,
        smartSpeed:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            }
        }
    })
  }
}


// Testimonial SLider
function testimonialSlider () {
  var cSlider = $ (".testimonial-slider");
  if(cSlider.length) {
      cSlider.owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:4000,
        autoplaySpeed:1200,
        lazyLoad:true,
        smartSpeed:1000,
        autoplayHoverPause:true,
        items:1
    })
  }
}


// Blog Slider
function blogSldier () {
  var bSlider = $ (".blog-slider");
  if(bSlider.length) {
      bSlider.owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed:1200,
        lazyLoad:true,
        smartSpeed:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            992:{
                items:3
            }
        }
    })
  }
}


// Details Page Image Gallery
function imageSlider () {
  var cSlider = $ (".details-img-sldier");
  if(cSlider.length) {
      cSlider.owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplaySpeed:1200,
        lazyLoad:true,
        smartSpeed:1000,
        autoplayHoverPause:true,
        items:1
    })
  }
}


// Product Slider
function productSlider () {
  var nSlider = $ (".related-product-slider");
  if(nSlider.length) {
      nSlider.owlCarousel({
        loop:true,
        nav:true,
        navText: ["",""],
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed:1300,
        lazyLoad:true,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            450:{
                items:2
            },
            992:{
                items:3
            }
        }
    })
  }
}

// shop price ranger
function priceRanger () {
  if ($('.price-ranger').length) {
    $( '.price-ranger #slider-range' ).slider({
      range: true,
      min: 0,
      max: 1200,
      values: [ 99, 1035 ],
      slide: function( event, ui ) {
        $( '.price-ranger .ranger-min-max-block .min' ).val( '$' + ui.values[ 0 ] );
        $( '.price-ranger .ranger-min-max-block .max' ).val( '$' + ui.values[ 1 ] );
      }
    });
      $( '.price-ranger .ranger-min-max-block .min' ).val( '$' + $( '.price-ranger #slider-range' ).slider( 'values', 0 ) );
    $( '.price-ranger .ranger-min-max-block .max' ).val( '$' + $( '.price-ranger #slider-range' ).slider( 'values', 1 ) );        
  };  
}

// Mixitup gallery
function mixitupGallery () {
  if ($("#mixitUp-item").length) {
    $("#mixitUp-item").mixItUp()
  };
}



// Scroll to top
function scrollToTop () {
  var scrollTop = $ (".scroll-top")
  if (scrollTop.length) {

    //Check to see if the window is top if not then display button
    $(window).on('scroll', function (){
      if ($(this).scrollTop() > 200) {
        scrollTop.fadeIn();
      } else {
        scrollTop.fadeOut();
      }
    });

    //Click event to scroll to top
      scrollTop.on('click', function() {
      $('html, body').animate({scrollTop : 0},1500);
      return false;
    });
  }
}



//Contact Form Validation
function contactFormValidation () {
  if($('.form-validation').length){
    $('.form-validation').validate({ // initialize the plugin
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        message: {
          required: true
        }
      },
      submitHandler: function(form) {
                $(form).ajaxSubmit({
                    success: function() {
                        $('.form-validation :input').attr('disabled', 'disabled');
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#alert-success').fadeIn();
                        });
                    },
                    error: function() {
                        $('.form-validation').fadeTo( "slow", 1, function() {
                            $('#alert-error').fadeIn();
                        });
                    }
                });
            }
        });
  }
}

// Close suddess Alret
function closeSuccessAlert () {
  var closeButton = $ (".closeAlert");
  if(closeButton.length) {
      closeButton.on('click', function(){
        $(".alert-wrapper").fadeOut();
      });
      closeButton.on('click', function(){
        $(".alert-wrapper").fadeOut();
      })
  }
}


// Sticky header
function stickyHeader () {
  var sticky = $('.theme-main-header'),
      scroll = $(window).scrollTop();

  if (sticky.length) {
    if (scroll >= 190) sticky.addClass('fixed');
    else sticky.removeClass('fixed');

  };
}



// Accordion panel
function themeAccrodion () {
  if ($('.theme-accordion > .panel').length) {
    $('.theme-accordion > .panel').on('show.bs.collapse', function (e) {
          var heading = $(this).find('.panel-heading');
          heading.addClass("active-panel");

    });

    $('.theme-accordion > .panel').on('hidden.bs.collapse', function (e) {
        var heading = $(this).find('.panel-heading');
          heading.removeClass("active-panel");
          //setProgressBar(heading.get(0).id);
    });

    $('.panel-heading a').on('click',function(e){
        if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
            e.stopPropagation();
        }
    });

  };
}




// DOM ready function
jQuery(document).on('ready', function() {
	(function ($) {
	   removePlaceholder ();
     BannerSlider ();
     BannerSliderTwo ();
     CounterNumberChanger ();
     themeMenu ();
     FancypopUp ();
     serviceSlider ();
     testimonialSlider ();
     blogSldier ();
     imageSlider ();
     productSlider ();
     priceRanger ();
     mixitupGallery ();
     scrollToTop ();
     contactFormValidation ();
     closeSuccessAlert ();
     themeAccrodion ();
  })(jQuery);
});


// Window load function
jQuery(window).on('load', function () {
   (function ($) {
		  prealoader ();
  })(jQuery);
 });


// Window scroll function
jQuery(window).on('scroll', function () {
  (function ($) {
    stickyHeader ();
  })(jQuery);
});
