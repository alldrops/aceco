$(function(){
	$('.mobile-nav .menu-icon').on('click', function(e) {
		e.preventDefault();
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).parent().find('ul').slideUp();
		} else {
			$(this).addClass('active');
			$(this).parent().find('ul').slideDown();;
		}
	});

	$('.flexslider').flexslider({
		animation: 'slide',
		direction: 'vertical',
		directionNav: true,
		controlNav: false,
		minItems: 2,
		animationLoop: true
	});

	$('.flexslider .slides').find('li').on('click', function(){
		var src= $(this).find('img').attr('src');
		$('.full-image').find('img').attr('src', src);
	});

	$('.rental-container a.options').on('click', function(e) {
		e.preventDefault();
		$('.rental-container a').removeClass('active');
		$(this).addClass('active');
	});

});