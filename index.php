<?php 
include 'header.php';
 ?>

 	<section class="wallpaper">
 		<div class="hero">
 			<div class="container">
 				<div class="row">
 					<img src="images/wallpaper.jpg" alt="">
 				</div>
 			</div>
 		</div>
 	</section>

	<section class="products">
		<div class="container">
				<div class="row">
				<?php 


				// $data = $pdo->query("SELECT * FROM products")->fetchAll();
				// // and somewhere later:
				// foreach ($data as $row) {
				//     echo $row['name']."<br />\n";
				// }

				$sql = 'SELECT * FROM products';

				$result = mysqli_query($conn, $sql);

				while($item = mysqli_fetch_assoc($result)) {

					echo '

					<div class="item col-md-3 col-xs-12 col-sm-6">
	 					<img src="images/' . $item['productImage'] . '" class="img-fluid" alt="' .$item['productImage'].'">
	 					<p class="name">'. $item['productName'] .'</p>
	 					<p class="description">' . $item['productDescription'] . '</p>
	 					<p class="price">$'. number_format($item['productPrice'], 2,'.', ',') .'</p>
	 				</div>
					';
				}

 				?>		
			</div>
		</div>
	</section>








<?php 
include 'footer.php';
 ?>


<script>
// $(document).ready(function() {
// 	var open = 'no';
// 	$('.navbar-toggler-icon').click(function() {
// 		if(open == 'no') {
// 			$('.collapse:not(.show)').css('display', 'block');
// 			open = 'yes';
// 		} else {
// 			$('.collapse:not(.show)').css('display', 'none');
// 			open = 'no';
// 		}
// 	})

// })
</script>