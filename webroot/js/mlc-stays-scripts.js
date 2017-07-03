$(document).ready(function(){
  $('.slider').slider();
  $('.materialboxed').materialbox();
  $(".button-collapse").sideNav();
});


	$(document).on('scroll', function (e) {
    e.preventDefault();
    var o = $(document).scrollTop() / 500;
    if (o > 1.000) { o = 1;
    var e = $('nav');
    $('nav').css('opacity', o);}
    else {
          $('.nav').css('background-color', 'transparent');
       }
});

function updateColor() {
  var o = $(document).scrollTop() / 500;
    if (o > 1.000) { o = 1; }
    var e = $('nav');
    var currentColor = e.css('background-color');
    var rgb = currentColor.replace(/^(rgb|rgba)\(/, '').replace(/\)$/, '').replace(/\s/g, '').split(',');
    var newColor = 'rgba(' + rgb[0] + ',' + rgb[0] + ',' + rgb[0] + ',' + o + ')';
    e.attr('style', 'background-color: ' + newColor + ' !important');
}

