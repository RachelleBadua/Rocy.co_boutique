<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddEditProduct.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Edit Product')); ?>
<?php $this->view('shared/sideBar'); ?>
<?php
	$product = $data['product'];
	$categories =  $data['categories'];
?>

	<div class="main">
		<div align="center" style="">
			<a href='/AdminProduct/index/'><?= _('back') ?></a>
			<h2><?= _('Edit Product') ?></h2>

			<form method ="post" action="" enctype="multipart/form-data">	
			<!-- TODO: add image here-->
				<div>
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
			    		<input type="file" name="image" onchange="loadFile(event)"/>
		    			<div>
							<img id="output" src="/resources/productImages/<?= $product->image?>" width="250">
						</div>
					</div>
				</div>
				<div class="insertProdInfo">
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('ID:') ?></label>
						<input class="btn-input" type="text" name="product_id" value='<?= $product->product_id ?>' readonly><br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Name:') ?></label>
						<input class="btn-input" type="text" name="product_name" value='<?= $product->product_name ?>'><br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Category:') ?></label>
						<select class="btn-input" name="category_id">

						<?php
							foreach($categories as $category){
								echo "<option value='$category->category_id' ";
								echo ($product->category_id == $category->category_id ? 'selected' : '');
								echo ">$category->category</option>\n";
							}
						?>
						</select><br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Price:') ?></label>
						<input class="btn-input" type="text" name="sellingPrice" value='<?= $product->sellingPrice ?>'><br>
					</div>
					<br>		
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Quantity:') ?></label>
						<input class="btn-input" type="text" name="quantity" value='<?= $product->quantity ?>'><br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Description:') ?></label>
						<textarea class="btn-input" name="description"> <?= $data['product']->description ?> </textarea><br>
					</div>
					<br>
				</div>
					<input type="submit" name="action" value="Edit Product">
			</form>
		</div>		
	</div>
</div>
