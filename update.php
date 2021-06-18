<?php 

include_once 'config.php';

if(isset($_POST['edit-data'])) {
	$name = $_POST['pname'];
	$descr = $_POST['pdesc'];
	$price = $_POST['pprice'];
	$id = $_POST['id'];
}


$edit = "UPDATE products SET productName = '$name', productDescription = '$descr', productPrice = $price WHERE productID = $id ";


$update = mysqli_query($conn, $edit);

if($update) {
	header('Location: edit.php?updateSuccessfull');
}

 ?>