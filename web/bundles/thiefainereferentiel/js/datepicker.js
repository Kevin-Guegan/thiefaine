$(document).ready(function(){

	$(function() {

		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$(".dateElement input").datepicker( $.datepicker.regional[ "fr" ] );

	}); 

})