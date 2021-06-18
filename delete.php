<?php 

include 'config.php';



if(isset($_POST['delete'])) {
	$id = $_POST['id'];
}

$sql = "DELETE FROM products WHERE id='$id'";

$confirm = mysqli_query($conn,$sql);



 ?>