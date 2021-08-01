jQuery("document").redy(function($){
	
	var menu = $(".umumi1");
	$(window).scroll(function(){
		
		if($(this).scrollTop()>47){
			umumi1.addClass("h-umumimenu");
		}else {
				umumi1.removeClass("h-umumimenu");
				
			}
			
		
		
		
		});
	
	
	});