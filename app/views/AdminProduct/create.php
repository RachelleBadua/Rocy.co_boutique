<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddEditProduct.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Add Product')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main" style="">
		<div align="center" style="">
			<h2>Add Product</h2>

			<form class="form-addProduct" method ="post" action="" enctype="multipart/form-data" style="" >	
				<!-- TODO: add image here-->
				<div style="">
					<div class="addImage" style="flex: 20%"> 

						<label><?= _('Image:') ?></label>
		    			<input type="file" name="image" onchange="loadFile(event)"/>
			    		<div class="">
			    			<img id="output" width="250" />
		    			</div>	
					</div>
				</div>
				<div class="insertProdInfo" style="">

					<div class="btn-addProduct" style="">
						<label class="btn-label" style=""><?= _('ID:') ?></label>
						<input class="btn-input" type="text" name="product_id" style="" disabled=""><br>
					</div>

					<br>

					<div class="btn-addProduct" style="">
						<label class="btn-label"><?= _('Name:') ?></label>
						<input class="btn-input" type="text" name="product_name"><br>
					</div>
					<br>
							
					<div class="btn-addProduct" style="">
						<label class="btn-label"><?= _('Category:') ?></label>
						<select class="btn-input" name="category_id">

					<?php
						foreach($data as $category){
							echo "<option value='$category->category_id'>$category->category</option>\n";
						}

					?>
						</select>
					</div>
					<br>
					<br>
					<div class="btn-addProduct" style="">
						<label class="btn-label"><?= _('Price:') ?></label>
						<input class="btn-input" type="text" name="sellingPrice"><br>
					</div>
					<br>
					<div class="btn-addProduct" style="">					
						<label class="btn-label"><?= _('Quantity:') ?></label>
						<input class="btn-input" type="text" name="quantity"><br>
					</div>
					<br>
					<div class="btn-addProduct" style="">
						<label class="btn-label"><?= _('Description:') ?></label>
						<textarea class="btn-input" name="description"></textarea>
					</div>
					<br>
					<br>
				</div>
					<input type="submit" name="action" value="Create">
			</form>
		</div>
	</div>
</div>
