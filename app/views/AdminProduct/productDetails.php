<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddProduct.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Product Details')); ?>
<?php $this->view('shared/sideBar'); ?>
<?php
	// $product = $data['product'];
	// $categories =  $data['categories'];
// var_dump($data->product_id);
?>

	<div class="main">
		<div align="center" style="">
			<a href='/AdminProduct/index/'><?= _('back') ?></a>
			<h2>Product Details</h2>

			<form method ="post" action="" enctype="multipart/form-data">	
			<!-- TODO: add image here-->
				<div>
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
			    		<!-- <input type="file" name="image" onchange="loadFile(event)"/> -->
		    			<div>
							<img id="output" src="/resources/productImages/<?= $data->image?>" width="250">
						</div>
					</div>
				</div>
				<div class="insertProdInfo">
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('ID:') ?></label>
						<!-- <input class="btn-input" type="text" name="product_id" value='< $product->product_id ?>' disabled> -->
						<div class="btn-input"><?= $data->product_id ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Name:') ?></label>
						<!-- <input class="btn-input" type="text" name="product_name" value='< $product->product_name ?>'> -->
						<div class="btn-input"><?= $data->product_name ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Category:') ?></label>
						<div class="btn-input"><?= $data->category ?></div>
						<!-- <select class="btn-input" name="category_id"> -->

						<!-- <
							foreach($categories as $category){
								echo "<option value='$category->category_id' ";
								echo ($product->category_id == $category->category_id ? 'selected' : '');
								echo ">$category->category</option>\n";
							}
						?> -->
						<!-- </select><br> -->
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Price:') ?></label>
						<!-- <input class="btn-input" type="text" name="sellingPrice" value='< $product->sellingPrice ?>'> -->
						<div class="btn-input"><?= $data->sellingPrice ?></div>	
						<br>
					</div>
					<br>		
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Quantity:') ?></label>
						<!-- <input class="btn-input" type="text" name="quantity" value='< $product->quantity ?>'> -->
						<div class="btn-input"><?= $data->quantity ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Description:') ?></label>
						<!-- <textarea class="btn-input" name="description"> <$data['product']->description ?> </textarea> -->
						<div class="btn-input"><?= $data->description ?></div>
						<br>
					</div>
					<br>
				</div >
					<!-- <input type="submit" name="action" value="Edit Product"> -->
			</form>
		</div>		
	</div>
</div>
