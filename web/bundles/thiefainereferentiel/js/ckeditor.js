$(document).ready(function(){

	$('textarea').each(function(){
		CKEDITOR.replace($(this).attr('id'));
	});

})