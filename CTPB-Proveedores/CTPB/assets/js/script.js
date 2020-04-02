$(document).ready(function() {

	$('#pass2').keyup(function() {

		var pass1 = $('#pass1').val();
		var pass2 = $('#pass2').val();

		if ( pass1 == pass2 ) {
			$('#error2').css("background", "url(assets/images/check.png)");
		} else {
			$('#error2').css("background", "url(assets/images/check-.png)");
		}

	});

});