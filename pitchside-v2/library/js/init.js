
$(document).ready(function(){
	init(); 
});










function init(){
	

	// $(window).scroll(function() {
	// 	var scroll = getCurrentScroll();
	// 	if((scroll % 3) == 0){ //Every 3rd pixel 
	// 		if(scroll > 200){
	// 			//Scrolling back up and not too close to the 'main' header
	// 			$('header').addClass('scroll');
	// 		}else{	
	// 			//Scrolling down
	// 			$('header').removeClass('scroll');
	// 		}

	// 	}
	// });


	$('.image-gallery ul').slick({
		infinite: true,
  		slidesToShow: 3,
  		dots: true,
  		arrows: false,
  		fade: false,
  		centerMode: true,
	})

	$('.icon-slider ul').slick({
		infinite: true,
  		slidesToShow: 4,
  		dots: false,
  		arrows: true,
  		fade: false,
  		centerMode: true,
  		responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		],
	})

	$('.js__open-nav').click(function(e){
		e.preventDefault();
		$('.mobile-nav').addClass('active');
	})

	$('.js__close-nav').click(function(e){
		e.preventDefault();
		$('.mobile-nav').removeClass('active');
	})


	$('.ld__header li').click(function(e){
		e.preventDefault();

		if($(this).hasClass('active')){
			// Do nothing...
		}else{
			$('.ld__header li').removeClass('active');
			$(this).addClass('active');

			$('.ld__content li').removeClass('active');
			$('.ld__content li[data-tab="'+$(this).data('tab')+'"]').addClass('active');
		}
	})

}




function getCurrentScroll() {
	return window.pageYOffset || document.documentElement.scrollTop;
}	
