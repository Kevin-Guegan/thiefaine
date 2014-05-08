$(document).ready(function(){

	//pour tous textaera, changement en ckeditor
	$('textarea').each(function(){
		CKEDITOR.replace($(this).attr('id'));
	});

})