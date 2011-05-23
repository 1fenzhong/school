$(document).ready(function(){
	
	//Fix Errors - http://www.learningjquery.com/2009/01/quick-tip-prevent-animation-queue-buildup/
	
	//Remove outline from links
	$("#menu-main a").click(function(){
		$(this).blur();
	});
	
	//When mouse rolls over
	$("#menu-main li").mouseover(function(){
		$(this).stop().animate({height:'150px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	
	//When mouse is removed
	$("#menu-main li").mouseout(function(){
		$(this).stop().animate({height:'52px'},{queue:false, duration:600, easing: 'easeOutBounce'})
	});
	
});