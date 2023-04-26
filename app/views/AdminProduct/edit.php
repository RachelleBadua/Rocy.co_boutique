<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddProduct.css">

<?php $this->view('shared/header', _('Edit Product')); ?>
<?php $this->view('shared/sideBar'); ?>
<?php
	$product = $data['product'];
	$categories =  $data['categories'];
?>

	<div class="main">
		<a href='/AdminProduct/index/'><?= _('back') ?></a>
		<h2>Edit Product</h2>

		<form method ="post" action="" enctype="multipart/form-data">	
		<!-- TODO: add image here-->
			<div class="addImage"> 
				<img src="/resources/productImages/<?= $product->image?>" width="250">
	    		<input type="file" name="image"/>
			</div>
		
			<div class="insertProdInfo">
				<label><?= _('ID:') ?></label><input type="text" name="product_id" value='<?= $product->product_id ?>' disabled><br>
				<br>
				<label><?= _('Name:') ?></label><input type="text" name="product_name" value='<?= $product->product_name ?>'><br>
				<br>
				<label><?= _('Category:') ?></label><select name="category_id">

				<?php
					foreach($categories as $category){
						echo "<option value='$category->category_id' ";
						echo ($product->category_id == $category->category_id ? 'selected' : '');
						echo ">$category->category</option>\n";
					}

				?>
				</select><br>
				<br>
				<label><?= _('Price:') ?></label><input type="text" name="sellingPrice" value='<?= $product->sellingPrice ?>'><br>
				<br>
				<label><?= _('Quantity:') ?></label><input type="text" name="quantity" value='<?= $product->quantity ?>'><br>
				<br>
				<label><?= _('Description:') ?></label><textarea name="description"> <?= $data['product']->description ?> </textarea><br>
				<br>
			</div>
				<input type="submit" name="action" value="Edit Product">
		</form>
	</div>
</div>
