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
        case 'profile':
            //Initialize profile screen related js
            break;
    }
}

/* Menu slider handling */
function toggleMenu() {
    if($('.menuSlider').offset().left == -300) {
        $('.menuSlider').animate({left: "0"});
        $('.menuViewport').fadeIn();
    } else
    {
        $('.menuSlider').animate({left: "-300px"});
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