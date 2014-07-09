$(document).ready(function(){
	$('.showImage').click(function(){

		var imageUrl = "/uploads/documents/";
		imageUrl += $(this).parent().children('input').val();

		$('#showImageModal').modal('show');
		$('#showImageModal .modal-body').html(
			'<img style="width:100%;" src="'+ imageUrl +'"/>'
		);

		$('#showImageModal .modal-footer .showFull').attr('href', imageUrl);
	})
})