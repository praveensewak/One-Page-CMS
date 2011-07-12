/* Author: Praveen Sewak
*/

$(document).ready(function(){
	$("#nav a").bind('click', function(){
		var offset = $($(this).attr('href')).offset();
		$.scrollTo(offset.top - 120, 500);
		return false;
	});
	
	// Resize the #main according to viewport
	$("section").each(function(){
		if($(this).height() < $(window).height() - 220){
			$(this).css('height', $(window).height() - 220);
		}
	});
});






















