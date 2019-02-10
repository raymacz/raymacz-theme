//Raymacz theme - custom functions

(function($){
  //images in post contents are changed to full bleed for center alignment
  $('figure.wp-caption.aligncenter').removeAttr('style');
	$('img.aligncenter').wrap('<figure class="centered-image" />');
  var $navlinks = $('.nav-links');

  //arrows Pagination
  $navlinks.find('.prev.page-numbers').append('<span class="arrow-prev"></span>');
  $navlinks.find('.next.page-numbers').append('<span class="arrow-next"></span>');
  $('<span class="prev page-numbers nav-stop" ><span class="arrow-prev"></span></span>').insertBefore('.page-numbers.current:first-child');
  $('<span class="next page-numbers nav-stop" ><span class="arrow-next"></span></span>').insertAfter('.page-numbers.current:last-child');


})(jQuery);
