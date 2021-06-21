<?php 

include 'config.php';

if(isset($_POST['id'])) {
	$id = $_POST['id'];
	echo 'id is showing';
} else {
	echo 'error';
}

$sql = "DELETE FROM products WHERE productId=$id ";

$confirm = mysqli_query($conn,$sql);

if($confirm) {
	// header('Location: index.php');
	alert('it worked');
} else {
	echo 'it didnt work';
	alert('it didnt work');
}


 ?>