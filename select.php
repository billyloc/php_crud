<?php 



$sql = 'SELECT * FROM products';

$result = mysqli_query($conn, $sql);

while($item = mysqli_fetch_assoc($result)) {

	echo '

		<div class="card" style="width: 18rem;">
		  <img src="images/' . $item['productImage'] . '" class="card-img-top" alt="' .$item['productImage'].'">
		  <div class="card-body">
		    <h5 class="card-title">'. $item['productName'] .'</h5>
		    <p class="card-text">' . $item['productDescription'] . '</p>
		  </div>
		  <ul class="list-group list-group-flush">
		    <li class="list-group-item">$'. $item['productPrice'] .'</li>
		    <li class="list-group-item">'. $item['productQty'] .'</li>
		    <li class="list-group-item">A third item</li>
		  </ul>
		  <div class="card-body">
		    <a href="#" class="card-link">Card link</a>
		    <a href="#" class="card-link">Another link</a>
		  </div>
		</div>


	';
}

 ?>