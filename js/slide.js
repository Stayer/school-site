function theRotator() {
	$('div#rotator ul li').css({opacity: 0.0});
	$('div#rotator ul li:first').css({opacity: 1.0});
	setInterval('rotate()',5000);
}
function rotate() {	
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
};
$(document).ready(function() {		
	theRotator();
});