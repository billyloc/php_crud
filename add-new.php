<?php 
include 'header.php';
include_once 'nav.php';
 ?>


<section class="add-new-form">
	<div class="container">
		<div class="row">
			<h2>Add New Products</h2>
			<div class="insert-container">
				<form action="insert.php" method="POST">
					<div class="form-class">
						<div class="mb-3">
						  	<label for="pname" class="form-label">Product Name:</label>
						  	<input type="text" class="form-control" name="pname" id="pname" placeholder="Product Name">
						</div>	
						<div class="mb-3">
						  	<label for="pdesc" class="form-label">Product Description:</label>
							<textarea class="form-control" name="description" id="pdesc" rows="3" placeholder="Product Description"></textarea>
						</div>
						<div class="mb-3">
						  	<label for="formFile" class="form-label">Product Image:</label>
	  						<input class="form-control" name="image" type="file" id="formFile">
						</div>
						<div class="mb-3">
						  <label for="pprice" class="form-label">Product Price:</label>
						  <input type="number" class="form-control" name="price" id="pprice">
						</div>	
						<div class="col-auto">
						    <button type="submit" class="btn btn-primary mb-3">Submit</button>
						</div>							
					</div>
				</form>
			</div>
		</div>
	</div>			
</section>









 <?php 
include 'footer.php';
 ?>