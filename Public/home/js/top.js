$(function(){
	$(".header_r li a").mouseover(function(){
		$(this).children(".sub").animate({opacity:"1","margin-top":"0"},"fast","linear");
	})
	$(".header_r li a").mouseout(function(){
		$(".sub").animate({opacity:"0","margin-top":"-15"},"fast","linear");
	})
})