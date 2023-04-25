<!-- <link rel="stylesheet" type="text/css" href="/resources/styles/adminMainContent.css"> -->
<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Add Product')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<h2>Add Product</h2>

		<!-- TODO: add image here-->
		<!-- <div style="position: relative; border: 1px solid red; width: 50px; height: 30px; line-height: 30px; text-align: center;" > 
		Image
    		<input type="file" style="opacity: 0.0; position: absolute; top:0; left: 0; bottom: 0; right:0; width: 100%; height:100%;" />
		</div> -->

		<form method ="post" action="">
			<div class="insertProdInfo">
				<label><?= _('ID:') ?></label><input type="text" name="product_id"><br>
				<br>
				<label><?= _('Name:') ?></label><input type="text" name="product_name"><br>
				<br>
						

				<label><?= _('Category:') ?></label><select name="category_id">

				<?php
					foreach($data as $category){
						echo "<option value='$category->category_id'>$category->category</option>\n";
					}

				?>
				</select><br>
				<br>
				<label><?= _('Price:') ?></label><input type="text" name="sellingPrice"><br>
				<br>
				<label><?= _('Quantity:') ?></label><input type="text" name="quantity"><br>
				<br>
				<label><?= _('Description:') ?></label><textarea name="description"></textarea><br>
				<br>
			</div>
				<input type="submit" name="action" value="Create">
			</form>
	</div>
</div>
