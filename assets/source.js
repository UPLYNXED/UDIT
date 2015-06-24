function initialize(screen) {
    //Initialize event handlers and the like here.
    $(document).on('click', '.menuButton, .menuViewport', function(){ 
        toggleMenu();
    });
    
    switch(screen)
    {
        case 'login':
            //Initialize login screen related js
            break;
        case 'register':
            //Initialize register screen related js
            break;
        case 'news':
            $('.greeting').html(setGreeting());
            break;
        case 'social':
            $('.messageText strong').css({color: getColorName($('.messageText strong').html())})
            break;
    }
}

/* Menu slider handling */
function toggleMenu() {
    if($('.menuSlider').css('margin-left') == "-300px") {
        $('.menuSlider').animate({marginLeft: "0px"});
        $('.menuViewport').fadeIn();
    } else
    {
        $('.menuSlider').animate({marginLeft: "-300px"});
        $('.menuViewport').fadeOut();
    }
}

/* Set greeting message based on time of day */
function setGreeting() {
    var date = new Date();
    var hours = date.getHours();
    var greeting = "";
    
    if (hours >=  0) greeting = "Good evening";
    if (hours >=  6) greeting = "Good morning";
    if (hours >= 12) greeting = "Good afternoon";
    if (hours >= 17) greeting = "Good evening";

    return greeting;
}

/* Random color based on name */
function getColorName(str) {
    var hash = 0;
    for (var i = 0; i < str.length; i++) {
        hash = str.charCodeAt(i) + ((hash << 5) - hash);
    }
    return "#" + intToARGB(hash);
} 

function intToARGB(i){
    var clr = ((i>>24)&0xFF).toString(16) + ((i>>16)&0xFF).toString(16) + ((i>>8)&0xFF).toString(16) + (i&0xFF).toString(16);
    return clr.substring(0, 6);
}

/* Navigation bar background fading */
function scrollNavBackground() {
    var bgTransparency = $(window).scrollTop()/210;
    $('nav').css({'background-color':'rgba(228,26,24, '+ bgTransparency +')'});
    scrollNavShadow(bgTransparency);
}

function scrollNavShadow(bgTransparency) {
    var shadowTransparency = bgTransparency*22/100;
    if(shadowTransparency <= 0.22) {
        $('nav').css({'-webkit-box-shadow':'0px 5px 5px 0px rgba(0,0,0, '+ shadowTransparency +')', '-moz-box-shadow':'0px 5px 5px 0px rgba(0,0,0, '+ shadowTransparency +')', 'box-shadow':'0px 3px 5px 0px rgba(0,0,0, '+ shadowTransparency +')'});
    } else {
        $('nav').css({'-webkit-box-shadow':'0px 5px 5px 0px rgba(0,0,0,0.22)', '-moz-box-shadow':'0px 5px 5px 0px rgba(0,0,0,0.22)', 'box-shadow':'0px 3px 5px 0px rgba(0,0,0,0.22)'});
    }
}

$(window).scroll(function()
{
    scrollNavBackground();
});