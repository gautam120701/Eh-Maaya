$(document).ready(function(){
	$('.slider-top').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: false,
	autoplaySpeed: 1500,
	dots: true,
	arrows:false
  });
  $('.prev-top').click(function(){
	$('.slider-top').slick('slickPrev');
  });
  $('.next-top').click(function(){
	$('.slider-top').slick('slickNext');
  });
  });