

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
 fczyNav.attr("class","");
 zcglNav.attr("class","");
 wyfwNav.attr("class","");
}