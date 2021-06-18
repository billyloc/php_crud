
$(document).ready(function() {
	var open = 'no';
	$('.navbar-toggler-icon').click(function() {
		if(open == 'no') {
			$('.collapse:not(.show)').css('display', 'block');
			open = 'yes';
		} else {
			$('.collapse:not(.show)').css('display', 'none');
			open = 'no';
		}
	})

})


