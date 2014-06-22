jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initcarousel-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    if ( typeof html5Lightbox === "undefined" )
    {
        html5Lightbox = jQuery(".html5lightbox").html5lightbox({
            skinsfoldername:"",
            jsfolder:jsFolder,
            barheight:48
        });
    }
    jQuery("#amazingcarousel-1").amazingcarousel({
        jsfolder:jsFolder,
        width:240,
        height:180,
        skinsfoldername:"",
        arrowhideonmouseleave:1000,
        itembottomshadowimagetop:100,
        random:false,
        showhoveroverlay:true,
        arrowheight:32,
        itembackgroundimagewidth:100,
        skin:"Classic",
        responsive:true,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        enabletouchswipe:true,
        navstyle:"bullets",
        scrollitems:1,
        arrowstyle:"always",
        bottomshadowimagetop:95,
        hoveroverlayimage:"hoveroverlay-64-64-3.png",
        itembottomshadowimage:"itembottomshadow-100-100-5.png",
        showitembottomshadow:false,
        navimage:"bullet-16-16-0.png",
        showitembackgroundimage:false,
        itembackgroundimage:"",
        playvideoimagepos:"center",
        circular:true,
        arrowimage:"arrows-32-32-2.png",
        showbottomshadow:false,
        screenquery:{
	mobile: {
		screenwidth: 600,
		visibleitems: 1
	}
},
        previewmode:false,
        itembackgroundimagetop:0,
        showbackgroundimage:false,
        lightboxbarheight:48,
        showplayvideo:true,
        spacing:18,
        backgroundimagetop:-40,
        scrollmode:"page",
        navdirection:"horizontal",
        itembottomshadowimagewidth:100,
        backgroundimage:"",
        autoplay:false,
        arrowwidth:32,
        pauseonmouseover:true,
        navmode:"page",
        interval:3000,
        backgroundimagewidth:110,
        navspacing:8,
        transitioneasing:"easeOutExpo",
        playvideoimage:"playvideo-64-64-0.png",
        visibleitems:3,
        navswitchonmouseover:false,
        direction:"horizontal",
        bottomshadowimagewidth:110,
        navheight:16,
        navwidth:16,
        loop:0,
        transitionduration:1000
    });
});