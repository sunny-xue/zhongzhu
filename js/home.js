$(function(){


var fczyNav=$('#fczyNav');
var zcglNav=$('#zcglNav');
var wyfwNav=$('#wyfwNav');

fczyNav.click(function(){

resetUI();
resetNavUI();
 $('#fczy').css("display","block");
 fczyNav.attr("class","red");
});

zcglNav.click(function(){

resetUI();
resetNavUI();
 $('#zcgl').css("display","block");
 zcglNav.attr("class","red");
});

wyfwNav.click(function(){

resetUI();
resetNavUI();
 $('#wyfw').css("display","block");
 wyfwNav.attr("class","red");
});

function resetUI(){
  $('#fczy').css("display","none");
$('#zcgl').css("display","none");
$('#wyfw').css("display","none");
}
function resetNavUI(){
	$(".title5 button").each(function(index){
		$(this).attr("class","");
	});
}

 SlideShow(5000, "#slideContainer", "#slidesImgs", "#banner-large-slideBar");
 });
