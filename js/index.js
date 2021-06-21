
$(document).ready(function() {
	// while in mobile toggle the menu open and close
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


	// when choosing the list to edit product, after you select the dropdown disable the first option since its just a placeholder
    $('#product_list').on('change', function() {
    	// alert($(this).val());
    	$("select option:first").attr("disabled", "true");
    })


    // load the selected product to edit, making sure they choose something first
    $('.edit-data').on('click', function(e) {
    	var list = $('#product_list').val();

    	if(list === '' ) {
    		e.preventDefault();
    		alert('Please choose a product to edit');
    	} else {
	    	var id = $('#product_list').val();
	    	$('.edit-list').load("select.php", {
	    		id: id
	    	});
    	}
    })		


    // Prompt user to confirm they want to delete the selected product, if yes delete using AJAX

    $('#delete-confirm').on('click', function() {
    	var id = $('#prod_id').val();

		$.ajax({
		  url: "delete.php",
		  type: "POST",
		  data: {id},
		}).done(function() {
		  location.href = 'index.php';
		})

    })


    // fix footer to bottom of page **TODO* figure out why its not automatically on the bottom
    var pathname = window.location.pathname;
    console.log(pathname);

    if(pathname === '/e-commerce/edit.php') {
    	$('.footer').css('position','fixed');
    }

})


