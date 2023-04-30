<link rel="stylesheet" type="text/css" href="/resources/styles/adminCategory.css">

<?php $this->view('shared/header', _('Category')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div class="categoryList">
			<h2>Category</h2>
			<table>
					<tr>
						<!-- <div class="attributes"> -->
						<th class="attributes">ID</th>
						<th class="attributes">Category Name</th>
						<th class="attributes">Actions</th>
						<!-- </div> -->
					</tr>
				
					<?php foreach ($data as $category) { ?>
					<tr>

						<!-- <td>< htmlentities($product->product_id) ?></td> -->
						<!-- <td><a href='/AdminProduct/productDetails/<?=$category->category_id?>'><?= htmlentities($category->category_id) ?></a></td> -->
						<td><?= htmlentities($category->category_id) ?></td>
						<td><?= htmlentities($category->category) ?></td>
						<td>
							<!-- TODO: make function to delete product-->
							<a href='/AdminCategory/delete/<?=$category->category_id?>'><?= _('remove') ?></a> 
							<!-- TODO: make function to edit product -->
							
						</td>
					</tr>
					<?php
					}
					?>
			</table>
		</div>
		<div class="addEdit">
			<div class="addCategory">
				hi miso
			</div>
			<div class="editCategory">
				hi nugget
			</div>
		</div>
	</div>
</div>

</body>