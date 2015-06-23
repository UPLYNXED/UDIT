function initialize(screen) {

    //Initialize event handlers and the like here.
    console.log(screen);
    
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
        case 'profile':
            //Initialize profile screen related js
            break;
    }
}

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

function scrollNavBackground() {
    var bgTransparency = $(window).scrollTop()/210;
    $('nav').css({'background-color':'rgba(228,26,24, '+ bgTransparency +')'});
    
    scrollNavShadow(bgTransparency);
}

function scrollNavShadow(bgTransparency) {
    var shadowTransparency = bgTransparency*22/100;
    if(shadowTransparency <= 0.22)
    {
        $('nav').css({'-webkit-box-shadow':'0px 5px 5px 0px rgba(0,0,0, '+ shadowTransparency +')', '-moz-box-shadow':'0px 5px 5px 0px rgba(0,0,0, '+ shadowTransparency +')', 'box-shadow':'0px 3px 5px 0px rgba(0,0,0, '+ shadowTransparency +')'});
    }
    else
    {
        $('nav').css({'-webkit-box-shadow':'0px 5px 5px 0px rgba(0,0,0,0.22)', '-moz-box-shadow':'0px 5px 5px 0px rgba(0,0,0,0.22)', 'box-shadow':'0px 3px 5px 0px rgba(0,0,0,0.22)'});
    }
}

$(document).ready(function() 
{
    //initialize();
});

$(window).scroll(function()
{
    scrollNavBackground();
});