<?php 
include_once 'header.php';
include_once 'nav.php';
 ?>

<section class="edit-form">
 	<div class="container">
 		<div class="row">
 			<h2>Update Your Products</h2>
 			<div class="edit-box">
	 			<div>Dropdown gives you all products you have entered, once you select a product, you will be able to edit the information or delete that product.</div>
	 			<div class="get-products">
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
 				<div class="edit-list"></div>
 			</div>
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

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
<!--         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        Are you sure you want to delete this product? This cannot be reversed
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" id="delete-confirm" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
















 <?php 

include_once 'footer.php';

  ?>


