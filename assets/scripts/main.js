/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {})(jQuery); // Fully reference jQuery after this point.

$(document).foundation();

$.each($('.card, .membersquare, .projectsquare, .clientlogo'), function(i, el){
  $(el).addClass('fadeInUp wow').attr('data-wow-delay', i%5*125 + 'ms');
});



$('document').ready(function() {


  $('input[type=text], input[type=email]').on('change', function(){
      if ( $(this).val() !== '' ) {
        $(this).addClass('filled');
      } else {
        $(this).removeClass('filled');
      }
  });


  $('a').click(function(e) {
    if ( ($(this).attr('href').substr(0,1)!=='#') && ($(this).attr('href').substr(0,6)!=='mailto') && (!$(this).hasClass('popimg'))
        ) {
      e.preventDefault();
      $('.document').addClass('docfade');
      window.location.href = $(this).attr('href');
    }
  });


  $('.document').removeClass('docfade');

  $('.top-bar button').on('click', function(event) {
    //event.preventDefault();
    /* Act on the event */

    if( !$('.top-bar').hasClass('is-stuck') ) {
      $('.top-bar').addClass('is-stuck');
      $('.sticky-container').height(0);
    }
    if( $('.top-bar').hasClass('is-at-top') ) {
      $('.sticky-container').height(0);
    }
  });

});




var wow = new WOW();
wow.init();

$(function() {
  var wow = new WOW({
    boxClass: 'wow',
    offset: 120,
  }).init();
});

