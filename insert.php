<?php 

include_once 'config.php';

$name = $_POST['pname'];
$desc = $_POST['description'];
$img = $_POST['image'];
$price = $_POST['price'];

// $info = pathinfo($_POST['image']);
// $ext = $info['extension']; // get the extension of the file
// $newname = "newname.".$ext; 

// $target = 'images/'.$newname;
// move_uploaded_file( $_POST['image'], $target);



$sql = "INSERT into products (`productName`,`productDescription`,`productImage`,`productPrice`) VALUES ('$name','$desc','$img',$price);";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// $stmt= $pdo->prepare($sql);
// $stmt->execute([$name, $desc, $img, $price]);

// header('Location: index.php');




 ?>