$(function(){
	$(".header_r li a").mouseover(function(){
		$(this).children(".sub").addClass("show_bar").removeClass("hide_bar");
	})
	$(".header_r li a").mouseout(function(){
		$(this).children(".sub").addClass("hide_bar").removeClass("show_bar");
	})
	$(".dataciew_list").hover(
		function(){
		var index = $(this).index(".dataciew_list");
			$(this).addClass("dataciew_list_bg");
			$(".dataciew_list::before").eq(index).css({"opacity":"1"});
			console.log($(".dataciew_list::before"));
			$(".dataciew_list").eq(index).children(".circle").addClass("circle_green");
			$(".dataciew_list").eq(index).children(".note").addClass("note_font");
	},
		function(){
			$(".dataciew_list").removeClass("dataciew_list_bg");
			$(".circle").removeClass("circle_green");
			$(".note").removeClass("note_font");
	}
	)
})