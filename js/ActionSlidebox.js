$(document).ready(function() {
	var autoPlayTime=10000;
	autoPlayTimer = setInterval( autoPlay, autoPlayTime );
	function autoPlay(){
		Slidebox('next');
	}
	$('#base_slidebox .next').click(function () {
		Slidebox('next','stop');
	});
	$('#base_slidebox .previous').click(function () {
		Slidebox('previous','stop');
	});
	var yPosition=($('#base_slidebox').height()-$('#base_slidebox .next').height())/2;
	$('#base_slidebox .next').css('top',yPosition);
	$('#base_slidebox .previous').css('top',yPosition);
	$('#base_slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
	$("#slidebox .content").each(function(i){
		slideboxTotalContent=i*$('#slidebox').width();	
		$('#slidebox .container').css("width",slideboxTotalContent+$('#slidebox').width());
	});
});


function Slidebox(slideTo,autoPlay){
    var animSpeed=1000; //animation speed
    var easeType='easeOutExpo';//'easeInOutExpo'; //easing type
	var sliderWidth=$('#slidebox').width();
	var leftPosition=$('#slidebox .container').css("left").replace("px", "");
	if( !$("#slidebox .container").is(":animated")){
		if(slideTo=='next'){ //next
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition==-slideboxTotalContent){
				$('#slidebox .container').animate({left: 0}, animSpeed, easeType); //reset
				$('#base_slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
				$('#base_slidebox .thumbs a:last-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '-='+sliderWidth}, animSpeed, easeType); //next
				$('#base_slidebox .thumbs .selected_thumb').next().removeClass('thumb').addClass('selected_thumb');
				$('#base_slidebox .thumbs .selected_thumb').prev().removeClass('selected_thumb').addClass('thumb');
			}
		} else if(slideTo=='previous'){ //previous
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition=='0'){
				$('#slidebox .container').animate({left: '-'+slideboxTotalContent}, animSpeed, easeType); //reset
				$('#base_slidebox .thumbs a:last-child').removeClass('thumb').addClass('selected_thumb');
				$('#base_slidebox .thumbs a:first-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '+='+sliderWidth}, animSpeed, easeType); //previous
				$('#base_slidebox .thumbs .selected_thumb').prev().removeClass('thumb').addClass('selected_thumb');
				$('#base_slidebox .thumbs .selected_thumb').next().removeClass('selected_thumb').addClass('thumb');
			}
		} else {
			var slide2=(slideTo-1)*sliderWidth;
			if(leftPosition!=-slide2){
				clearInterval(autoPlayTimer);
				$('#slidebox .container').animate({left: -slide2}, animSpeed, easeType); //go to number
				$('#base_slidebox .thumbs .selected_thumb').removeClass('selected_thumb').addClass('thumb');
				var selThumb=$('#base_slidebox .thumbs a').eq((slideTo-1));
				selThumb.removeClass('thumb').addClass('selected_thumb');
			}
		}
	}
}
