$(document).ready(function(){
  $('.slider').slider();
  $('.materialboxed').materialbox();
  $(".button-collapse").sideNav();
  $('.materialboxed').materialbox();
  $('.carousel').carousel();
  $('.parallax').parallax();
  $('.scrollspy').scrollSpy();

   $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
    });

   var $on = 'section';
    $($on).css({
      'background':'none',
      'border':'none',
      'box-shadow':'none'
    });

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
                'background-color': '#1d194c',//#1b2030
            });
        }

    }
    lastScrollTop = st;
});

//countdown *****
// Set the date we're counting down to
var countDownDate = new Date("August 25, 2017 22:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("cdtime").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("cdtime").innerHTML = "EXPIRED";
    }
}, 1000);

});