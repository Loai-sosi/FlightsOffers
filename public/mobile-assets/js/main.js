/*global $, jQuery, console, alert, prompt */
$(window).on('load', function () {
    "use strict";
    $(".se-pre-con,.pre-loader").delay(500).fadeOut("slow");
    new WOW().init(
        {
            mobile: false,
            live: true
        });

        $('.events-slider').owlCarousel({
            // center: true,
            items: 1,
            loop: false,
            rtl: true,
            nav: true,
            navText: [`<span>
            <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
            <path id="Path_42242" data-name="Path 42242" d="M2115,70l4.061,4.061L2115,78.121" transform="translate(-2113.94 -68.939)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          </svg>
          
              </span>`, `
              <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="5.871" height="10.242" viewBox="0 0 5.871 10.242">
              <path id="Path_42242" data-name="Path 42242" d="M2119.061,70,2115,74.061l4.061,4.061" transform="translate(-2114.25 -68.939)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
            </svg>
            
              </span>
            `],
            dots: false,
            autoplay: false,
            autoplaySpeed: 1500,
            margin: 12,
        });
});

