<?php 

include_once 'config.php';

include 'header.php';

 ?>

 <section>
 	<div class="container">
 		<div class="row">
 			<h2>Update DB Info</h2>
 			<div class="get-product">
 				<select name="products" id="product_list">
 					<option value="" id="disable">Choose a Product to edit</option>
 					<?php  
					$sql = 'SELECT * FROM products';

					$info = mysqli_query($conn, $sql);

					while($data = mysqli_fetch_assoc($info)) {
						echo '<option id="edit_info" value="'. $data['productId'] .'"> '. $data['productName'] .'</option>';
					}

					?>
 				</select>
 				<button class="edit-data">Edit</button>
 		</div>
 	</div>
 </section>

 <section>
 	<div class="container">
 		<div class="row">
 			<div class="form-update">
 				<form action="update.php" method="POST" class="edit-form">
					 					
 				</form>
 			</div>
 		</div>
 	</div>
 </section>


 <?php 

include 'footer.php';

  ?>

<script>

$(document).ready(function() {

    $('#product_list').on('change', function() {
    	// alert($(this).val());
    	$("select option:first").attr("disabled", "true");
    })

    $('.edit-data').on('click', function() {
    	var id = $('#product_list').val();
    	$('.edit-form').load("select.php", {
    		id: id
    	});
    })	



	// $.ajax({
	// 	url: 'select.php',
	// 	method: 'POST',
	// 	data: {
	// 		id: id
	// 	};
	// })
})











  </script>

