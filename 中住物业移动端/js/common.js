var ww;
var wh;
$(document).ready(function() {

	//顶部下拉
	$(".list_ul2").hide();
	$(".meun").click(function() {
		$(this).toggleClass("meunCurrent");
		$(".list_ul2").slideToggle();
		$(".searchHide").slideUp(10);
	});
	$(".searchHide").hide();
	$(".search").click(function() {
		$(".searchHide").slideToggle();
		$(".list_ul2").slideUp(10);
	});

});