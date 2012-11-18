$(document).ready(function() {

	var resize_position = '';
	var drag_position = '';

	// Admin Area Dashboard Panels
	$('.page-editor-panel').draggable({
		snap: true,
		drag: function(event,ui){
			drag_position = ui.position;
		}
	}).resizable({
		resize: function(event,ui){
			resize_position = ui.position;
		}	
	});
	console.log(resize_position);
	console.log(drag_position);

	$('a.delete').click(function(e){
		e.preventDefault();

		url = $(this).attr("href");

		link = $(this);

		$.ajax({
			url: url,
			complete: function(xhr) {
				
				response = getJSON(xhr);

				if (response.deleted == true){
					$(link).closest('td').children('a').children('i').addClass('icon-white');
					$(link).closest('tr').css('background-color','#f00').css('color','#fff').delay(800).hide('slow');
				}
			}
		});
	})

	

});

function getJSON(xhr) {
	var json;
	try { json = xhr.responseText }
	
	catch(e) {}

	if (json) {
		var data = eval('(' + json + ')'); // or JSON.parse or whatever you like
		return data
	}
}