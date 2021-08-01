$(()=>{
$("#form-phone").mask("8(999) 999-9999");
// 	$(window).resize(function(){
// 			if (document.body.clientWidth < 1001){
// 					$('.structure-container').slick({
// 						prevArrow: '.slider-arrow-prev',
// 					 nextArrow: '.slider-arrow-next'
// 					});

// 					$('.dots').slick({

// 								slidesToShow: 5,
// 								asNavFor: '.structure-container', 
// 				    focusOnSelect: true 

// 					});
// 				$('.slider-arrow-prev, .slider-arrow-next').click(function(){

// 					$('.dots-item').each(function(){
// 						console.log($(this).data('numb') +'  '+$('.structure-row.slick-active').data('numb'));
// 						$(this).data('numb') === $('.structure-row.slick-active').data('numb') ?
// 							$(this).addClass('slick-current') :
// 							$(this).removeClass('slick-current');

// 					});
// 				});
// 	}
// });
var count = 0;

$('.card-group-container').each(function(){
	$(this).click(function(){
		$(this).toggleClass('active');
	});
});

$('.price-card').each(function(){
	$(this).click(function(){
			$('.card-group-container').each(function(){
				if($(this).hasClass('active')){
					count++;
				}
			});
			count !== 0 ? $(this).addClass('active') : $(this).removeClass('active');
			count = 0;
		});
	});


	if (document.body.clientWidth < 1001){
					$('.structure-container').slick({
						prevArrow: '.slider-arrow-prev',
					 nextArrow: '.slider-arrow-next'
					});

					$('.dots').slick({

								slidesToShow: 5,
								asNavFor: '.structure-container', 
				    focusOnSelect: true 

					});
				$('.slider-arrow-prev, .slider-arrow-next').click(function(){

					$('.dots-item').each(function(){
						console.log($(this).data('numb') +'  '+$('.structure-row.slick-active').data('numb'));
						$(this).data('numb') === $('.structure-row.slick-active').data('numb') ?
							$(this).addClass('slick-current') :
							$(this).removeClass('slick-current');

					});
				});
	}
});