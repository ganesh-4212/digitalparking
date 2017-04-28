function loginLoad(){
	var centerCardLeft=(window.innerWidth/2)-($('.centerCard').width()/2);
	var centerCardTop=(window.innerHeight/2)-($('.centerCard').height()/2);
	$('.centerCard').css("left",centerCardLeft);
	$('.centerCard').css("top",centerCardTop);
}