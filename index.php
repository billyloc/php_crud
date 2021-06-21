<?php 
include_once 'header.php';
include_once 'nav.php';
 ?>

 	<section class="wallpaper">
 		<div class="hero">
			<img src="images/wallpaper.jpg" alt="wallpaper">
			<div class="hero-message">
				<h1>Store Name</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, debitis provident nihil ullam dolore numquam possimus reiciendis quisquam dolores maxime nemo eum ducimus blanditiis consectetur molestiae culpa hic dolor non!</p>
				<button>CTA</button>
			</div>
 		</div>
 	</section>

	<section class="products">
		<div class="container">
			<div class="row">
				<?php 

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

