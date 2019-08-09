
(function ($) {
	
	"use strict";

	// Comments
	$(".commentlist li").addClass("panel panel-default");
	$(".comment-reply-link").addClass("btn btn-default");

	// Forms
	$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
	$('input[type=submit]').addClass('btn btn-primary');
	
	//Scroll snippet
 	// Select all links with hashes
  	$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });	

	// sliders
	$('.full-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		adaptiveHeight: true
	});

	$('.only-dots').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false
	});

  $('.navbar').affix({
      offset: {
          top: 100
        }
  }); 

  if($(window).width() > 768){
    //click modal on gallery
    $('.gallery .item-gallery').each(function(index, el) {
        //instance
        var $this = $(this);   

        $this.on('click', function(event) {
          event.preventDefault();

          var $imagePath = $(this).data('modal'); 
          /* Act on the event */
          $('.con-modal').show();

          $('.con-modal figure img').remove();

          $('.con-modal figure').html('<img src="'+ $imagePath +'">');

        });
    });

    $('.con-modal .close-modal').click(function(event) {
      /* Act on the event */
      $(this).parent('.con-modal').hide();
    });

  }

  $(".gallery").mCustomScrollbar({
    theme:"inset-2"
  });
	

}(jQuery));
