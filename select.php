<?php 

include 'config.php';

$id = $_POST['id'];

	$sql = "SELECT * FROM products WHERE productId= $id";

	$result = mysqli_query($conn, $sql);

	// $row = mysqli_fetch_assoc($result);

	// echo '<p>'$row['productName']'</p>';

		// if($result) {

		// echo '
		// 	<div class="form-group">
		// 		<label for="pname">Product Name:</label>
		// 		<input type="text" val="'. $result['productName'] .'" name="pname">
		// 	</div>
		// 	<div class="form-group">
		// 		<label for="pdesc">Product Description:</label>
		// 		<input type="text" val="'. $result['productDesciption'] .' name="pdesc">
		// 	</div>
		// 	<div class="form-group">
		// 		<label for="pprice">Product Price:</label>
		// 		<input type="num" val="'. $result['productPrice'] .' name="pprice">
		// 	</div> 		
		// ';	
		// }

	while($row = mysqli_fetch_assoc($result)) {
		echo '
			<div class="form-group">
				<label for="pname">Product Name:</label>
				<input type="text" value="'. $row['productName'] .'" name="pname" placeholder="'. $row['productName'] .'">
			</div>
			<div class="form-group">
				<label for="pdesc">Product Description:</label>
				<input type="text" value="'. $row['productDescription'] .'" name="pdesc" placeholder="'. $row['productDescription'] .'">
			</div>
			<div class="form-group">
				<label for="pprice">Product Price:</label>
				<input type="num" value="'. $row['productPrice'] .'" name="pprice" placeholder="'. $row['productPrice'] .'">
				<input type="hidden" id="prod_id" value="'. $row['productId'] .'" name="id">
			</div> 	
			<div class="form-group">
				<button type="submit" class="update-data">Update</button>	
				<button type="button" id="delete-data" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Delete
</button>
			</div>

		';
	}


 ?>