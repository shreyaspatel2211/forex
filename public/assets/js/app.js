$(document).ready(function() {
  jQuery('#hamburger-icon').click(function() {
    jQuery('#mobile-nav').toggleClass('translate-x-full'); // Slide in/out mobile menu
    jQuery('#hamburger').toggleClass('hidden'); // Hide hamburger icon
    jQuery('#close-icon').toggleClass('hidden'); // Show close icon
  });

  // Close the mobile menu when the close icon is clicked
  jQuery('#close-mobile-nav').click(function() {
    jQuery('#mobile-nav').toggleClass('translate-x-full');
    jQuery('#hamburger').toggleClass('hidden');
    jQuery('#close-icon').toggleClass('hidden');
  });

  jQuery('.tab-button').click(function () {
    const targetTab = jQuery(this).data('tab');
    
    // Update tab button styles
    jQuery('.tab-button').removeClass('tab-active').addClass('tab-inactive');
    jQuery(this).addClass('tab-active').removeClass('tab-inactive');
    
    // Show the target content and hide others
    jQuery('.tab-content').addClass('hidden');
    jQuery(`[data-content="${targetTab}"]`).removeClass('hidden');
  });

  jQuery('.whatWeButton').click(function () {
    const targetTab = jQuery(this).data('tab');
    
    // Update tab button styles
    jQuery('.whatWeButton').removeClass('tab-active').addClass('tab-inactive');
    jQuery(this).addClass('tab-active').removeClass('tab-inactive');
    
    // Show the target content and hide others
    jQuery('.whatWetab-content').addClass('hidden');
    jQuery(`[data-content="${targetTab}"]`).removeClass('hidden');
  });

  jQuery('.review-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, // Tablet
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768, // Mobile
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});
