<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddProduct.css">

<?php $this->view('shared/header', _('Edit Product')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<h2>Edit Product</h2>

		<form method ="post" action="" enctype="multipart/form-data">	
		<!-- TODO: add image here-->
			<div class="addImage"> 
				<img src="/../../images/<?= $data->image?>
	    		<input type="file" name="image"/>
			</div>
		
			<div class="insertProdInfo">
				<label><?= _('ID:') ?></label><input type="text" name="product_id" value='<?= $data->product_id ?>'><br>
				<br>
				<label><?= _('Name:') ?></label><input type="text" name="product_name" value='<?= $data->product_name ?>'><br>
				<br>
				<label><?= _('Category:') ?></label><select name="category_id">

				<?php
					foreach($data as $category){
						echo "<option value='$category->category_id'";
						echo ( ? 'selected' : '');
						echo ">$category->category</option>\n";
					}

				?>
				</select><br>
				<br>
				<label><?= _('Price:') ?></label><input type="text" name="sellingPrice" value='<?= $data->sellingPrice ?>'><br>
				<br>
				<label><?= _('Quantity:') ?></label><input type="text" name="quantity" value='<?= $data->product_name ?>'><br>
				<br>
				<label><?= _('Description:') ?></label><textarea name="description"></textarea><br>
				<br>
			</div>
				<input type="submit" name="action" value="Create">
		</form>
	</div>
</div>
