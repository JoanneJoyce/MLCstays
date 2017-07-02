$(document).ready(function(){
  $('.slider').slider();
  $('.materialboxed').materialbox();
});

$(document).on('scroll', function (e) { 
	updateColor(); 
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

updateColor();