// JavaScript Document

$(document).ready(function(){
    $(window).scroll(check_if_nav_in_view);
	$(window).scroll('scroll resize', check_if_nav_in_view);
});



function check_if_nav_in_view(){ 
	var window_height = $(window).height();
	var window_top_position = $(window).scrollTop();
	var window_bottom_position = window_top_position+window_height;
		//check to see if this current container is within viewport
		if (window_top_position>=10)  {
		  $('#not-in-view').addClass('actual-bg')
		} 
		else {
			$('#not-in-view').removeClass('actual-bg');
		}
}

var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
  $(".animation-element").each(function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');

    } else {
    }
  });
}
$(document).ready(function(){
	$window.on('scroll', check_if_in_view);
	$window.on('scroll resize', check_if_in_view);
});

//$(document).ready(function(){
//	$('.animation-element').each(function(){
//		alert("Working");
//	});
//});