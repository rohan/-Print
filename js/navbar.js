jQuery(document).ready(function($) {
    // makes each navbar element glow when scrolled through
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        var absHeight = $(window).height();

        if(height < absHeight) {
            $('#about-button').addClass('active');
            $('#gallery-button').removeClass('active');
            $('#videos-button').removeClass('active');
            $('#contact-button').removeClass('active');
        }
        else if (height >= absHeight && height < 2*absHeight) {
            $('#about-button').removeClass('active');
            $('#gallery-button').addClass('active');
            $('#videos-button').removeClass('active');
            $('#contact-button').removeClass('active');
        }
        else if (height >= 2*absHeight && height < 3*absHeight){
            $('#about-button').removeClass('active');
            $('#gallery-button').removeClass('active');
            $('#videos-button').addClass('active');
            $('#contact-button').removeClass('active');
        }
        else {
            $('#about-button').removeClass('active');
            $('#gallery-button').removeClass('active');
            $('#videos-button').removeClass('active');
            $('#contact-button').addClass('active');
        }
    });
    
    // makes each navbar element responsive (100 offset for navbar itself)
    $('#home-button').click(function() {
        $('html,body').animate({scrollTop:
            $('.home-sect').offset().top - 150}, 750);
    });
    $('#about-button').click(function() {
        $('html,body').animate({scrollTop:
            $('.about-sect').offset().top - 100}, 750);
    });
    $('#gallery-button').click(function() {
        $('html,body').animate({scrollTop:
            $('.gallery-sect').offset().top - 100}, 750);
    });
    $('#videos-button').click(function() {
        $('html,body').animate({scrollTop:
            $('.videos-sect').offset().top - 100}, 750);
    });
    $('#contact-button').click(function() {
        $('html,body').animate({scrollTop:
            $('.contact-sect').offset().top - 100}, 750);
    });
    $('#about-scroll').click(function() {
        $('html,body').animate({scrollTop:
            $('.about-sect').offset().top - 100}, 750);
    });
});
