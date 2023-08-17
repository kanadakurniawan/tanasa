// window.onload = function(){ 
// 	var tinggi03 = $(".slides").outerHeight(true); 	
//     var h = window.innerHeight-180;
// 	var marginatas = (h-tinggi03)/2-20;
// 	document.getElementById("slides").style.marginTop = marginatas + "px";
// };
function sembunyikan() {
    var x = 2000;
    $('#slides').each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });   

    $('#tulisan').each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });   
}
$(document).ready(function(){ // better to use $(document).ready(function(){
    $('#logo').on('click touchstart', function() {
		var v = document.getElementById("slides");
		if (v.style.display === "none") {
			v.style.display = "block";
		} else {
			v.style.display = "none";
		}
		var z = document.getElementById("tulisan");
		if (z.style.display === "none") {
			z.style.display = "block";
		} else {
			z.style.display = "none";
		}
    });
});	

new CustomSlider({
  sliderId: 'mySlider',
  displayTime: 12000,
  transitionEffect: 'fade',
  transitionDuration: 2,
  pauseOnHover: true,
  autoStart: true,
  useSwipe: true,
  sideBtnAreaWidth: '50%',
  sideBtnGradientBG: false,
  sideBtnOpacity: 0.5,
  sideBtnHoverOpacity: 0.85,
  sideBtnTransitionDuration: 0.15,
  sideBtnArrowColor: '#FFFFFF',
  sideBtnArrowHeight: 0,
  sideBtnArrowWidth: 0,
  sideBtnArrowStrokeWidth: 4,
  sideBtnBG: 'none',
  sideBtnBGwidth: 32,
  sideBtnBGheight: 42,
  sideBtnBGfilled: true,
  sideBtnBGcolor: '#000000',
  sideBtnBGborderRadius: 4,
  sideBtnBGborderWidth: 0,
  sideBtnBGborderColor: '#FFFFFF',
  sideBtnHasShadow: false,
  sideBtnShadowDeviation: 2,
  sideBtnShadowOffsetX: 2,
  sideBtnShadowOffsetY: 2,
  sideBtnShadowOpacity: 0.4,
  controlColor: 'rgba(217, 217, 217, 0)',
  controlHeight: 0,
  controlSeparation: 0,
  controlBorderWidth: 0,
  controlBorderColor: '#000000',
  activeControlColor: '#878787',
  activeControlBorderColor: '#000000',
  controlsVerticalPosition: 'inside',
  controlsBottomDistance: '5%',
  controlsTopDistance: '12px',
  controlsShadow: 'none',
  controlsShadowDeviation: 1,
  controlsShadowOffsetX: 1,
  controlsShadowOffsetY: 1,
  controlsShadowOpacity: 0.4
});


function sembunyikanAward(w) {
    var z = ".award"+w;
    var x = 2000;
    $(z).each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });

    $('.awardthumbnail').each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });    
}
function sembunyikanPorto(w) {
    var z = ".porto"+w;
    var x = 2000;
    $(z).each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });

    $('.portothumbnail').each(function(index) {
        if ($(this).css('display') == 'none') {
            $(this).fadeIn(x);
        }
        else {
            $(this).hide();
        }
    });    
}