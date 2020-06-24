jQuery(document).ready(function($) {
	$('.micon-menu').click(function(event) {
		// alert('hello');
		$(this).closest('.m-menu-right').find('.m-menu').css({
			
			width: '300px',
			overflow: 'scroll'
		});;
		$('body').css('overflow', 'hidden');
		$(this).closest('.m-menu-right').find('.search-form-wrapper').addClass('mobile-search');
		$('.m-overlay').css('display', 'block');
	});
	$('.m-close i').click(function(event) {
		$('.m-menu').css('width', '0px');
		$('.m-overlay').css('display', 'none');
	});
	$('.m-overlay').click(function(event) {
		$('.m-menu').css('width', '0px');
		$(this).css('display', 'none');
	});

	$('.aboutus-content-left').removeClass('Aaboutus-content-left');
	$('.aboutus-content-image').removeClass('Aaboutus-content-image');
	$('.aboutus-content-right').removeClass('Aaboutus-content-right');

	jQuery(window).scroll(function() {
		isDesktop=$('body').width();
			
		if(isDesktop>768){
			console.log('hello');
			
			if (jQuery(this).scrollTop() > 100){
				$('.aboutus-content-left').addClass('Aaboutus-content-left');
				$('.aboutus-content-image').addClass('Aaboutus-content-image');
				$('.aboutus-content-right').addClass('Aaboutus-content-right');
				
			}
		}
		if(isDesktop<=768){
			if (jQuery(this).scrollTop() > 100 ) {
			$('.aboutus-content-left').addClass('Aaboutus-content-left');
			// alert('mobile');
			}
			
			if (jQuery(this).scrollTop() > 500) {
				$('.aboutus-content-image').addClass('Aaboutus-content-image');
				

			}
			if (jQuery(this).scrollTop() > 1000) {
			
				$('.aboutus-content-right').addClass('Aaboutus-content-right1');

			}
		
		}
		
		
		t=$(window).scrollTop();
		console.log(t);
		
		

	});
});