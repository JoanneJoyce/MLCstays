$(document).ready(function(){
  $('.slider').slider();
  $('.materialboxed').materialbox();
  $(".button-collapse").sideNav();

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#navbar').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .MagicMenu-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#navbar').fadeOut(500);
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#navbar').fadeIn(500);
        }
    }
    
    lastScrollTop = st;
}

});