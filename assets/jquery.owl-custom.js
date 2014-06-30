(function($){
	
	var OwlCarousel = {
			init : function(){
				$(".owl-carousel").owlCarouselContao();
			},
			getConfig : function($this){
				return $.ajax({
					dataType	: 'json',
					url 		: $this.attr('data-cfg'),
				});
			}
	};
	
	$.fn.owlCarouselContao = function() {
		
		this.each( function(){
			
			var $this = $(this);
				
			$.when(OwlCarousel.getConfig($this)).done(function(config){
				$this.owlCarousel(config);
			});

			return this;
        });
	};

	$(document).ready(function(){
		OwlCarousel.init();
	});
	
})(jQuery);