jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

  jQuery(window).scroll(function() {
       var scroll = jQuery(window).scrollTop();

       if (scroll >= 200) {
           jQuery(".site-text").addClass('smaller');
       } else {
           jQuery(".site-text").removeClass("smaller");
       }
   });

  jQuery(".carousel").slick({
    dots: true,
    autoplay: true,
    infinite: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev">Back</button>',
    nextArrow: '<button type="button" class="slick-next">Go</button>',
    appendArrows: '<div class="slick-slide">'
  });

});
