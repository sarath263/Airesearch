var curpage=1;
function upscr () {
    if (curpage<=1) {curpage=1;}
        else {curpage--;}
        if (curpage==1) {
            $(this).scrollTo(0);
            $("#topi" ).attr("style","");
            $(".logo img").css("width","100%");
            $("#navi" ).attr( "style","");
            $("#navi ul li a" ).attr( "style","");
            $("#navi ul li" ).attr( "style","");
        }
        else
        $(this).scrollTo('#page'+curpage);
}
function dnscr () {
    if (curpage>=3) {curpage=3;}
        else curpage++;
        $("#topi" ).attr( "style","margin-top: 0;padding: 0.5% 0;background:#000;");
        $(".logo img").css("width","60%");
        $("#navi" ).attr( "style","margin-top: 1.4%;");
        $("#navi ul li" ).attr( "style","height: 3.8vh;");
        $("#navi ul li a" ).attr( "style","font-size: 1vw; text-transform: uppercase;");
        $(this).scrollTo('#page'+curpage);
}

$(window).bind('mousewheel', function(event) {

	var st = $(this).scrollTop();
	if (st==0) {
		$("#topi" ).attr("style","");
	}
    if (event.originalEvent.wheelDelta >= 0) 
        upscr ();
    else 
        dnscr ();
});
var lastScroll = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st==0) {
        $("#topi" ).attr("style","");
    }else{
        $("#topi" ).attr( "style","margin-top: 0;padding: 0.5% 0;background:#000;");
        $(".logo").css("margin-top"," 1.5vh");
        $(".logo img").css("width","60%");
        $("#navi" ).attr( "style","margin-top: 1.4%; margin-bottom: 0.5%;");
        $("#navi ul li" ).attr( "style","height: 3.8vh;");
        $("#navi ul li a" ).attr( "style","font-size: 1vw; text-transform: uppercase;");
        $("#spe" ).attr( "style","font-size: 1vw; text-transform: uppercase; padding: 1vh; padding-top: 1.3vh; margin-top: -0.8vh;");
    }
    $("#topi" ).attr( "style","margin-top: 0;padding: 0.5% 0;background:#000;");
        $(".logo").css("margin-top"," 1.5vh");
        $(".logo img").css("width","60%");
        $("#navi" ).attr( "style","margin-top: 1.4%; margin-bottom: 0.5%;");
        $("#navi ul li" ).attr( "style","height: 3.8vh;");
        $("#navi ul li a" ).attr( "style","font-size: 1vw; text-transform: uppercase;");
        $("#spe" ).attr( "style","font-size: 1vw; text-transform: uppercase; padding: 1vh; padding-top: 1.3vh; margin-top: -0.8vh;");
//     //Sets the current scroll position
//     var sc = $(this).scrollTop();
//     //Determines up-or-down scrolling
//     if (sc > lastScroll){
//        //Replace this with your function call for downward-scrolling
//        console.log('Scroll down');
//        dnscr ();
//     }
//     else {
//        //Replace this with your function call for upward-scrolling
//        console.log('Scroll up');
//        upscr ();
//     }
//     //Updates scroll position
//     lastScroll = sc;
});
// st = $("#page"+curpage).scrollTop();
//         var body = $("html, body");
//         body.animate({scrollTop:st}, '500', 'swing');