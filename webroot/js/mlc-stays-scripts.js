$(document).ready(function(){
  $('.slider').slider();
  $('.materialboxed').materialbox();
  $(".button-collapse").sideNav();

var didScroll;
var lastScrollTop = 0;
var navbarHeight = $('#navbar').outerHeight();

$(window).scroll(function(event){
    var st = $(this).scrollTop();
    
    
    // If they scrolled down and are past the navbar, add class .MagicMenu-up.
    // This is necessary so you never see what is "behind" the navbar.

    if (lastScrollTop < st){
        // Scroll Down
        $('#navbar').fadeOut(500);
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            if (st > navbarHeight) {
                $('#navbar nav').removeClass('transparent');
            }

            if(st == 0) {
                $('#navbar nav').slideUp(200, function(){
                    $('#navbar nav').addClass('transparent');
                });
                $('#navbar nav').slideDown(200);
            }
            $('#navbar').fadeIn(500);
            $('#navbar nav').css({
                'background-color': '#1b2030',
            });
        }

    }
    lastScrollTop = st;
});

});