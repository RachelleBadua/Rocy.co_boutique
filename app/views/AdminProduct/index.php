<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Product List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<h2>Product List</h2>
		<table>
				<tr>
					<!-- <div class="attributes"> -->
					<th class="attributes">ID</th>
					<th class="attributes">Name</th>
					<th class="attributes">Category</th>
					<th class="attributes">Price</th>
					<th class="attributes">Qty</th>
					<th class="attributes">Actions</th>
					<!-- </div> -->
				</tr>
			
				<?php foreach ($data as $product) { ?>
				<tr>

					<!-- <td>< htmlentities($product->product_id) ?></td> -->
					<td><a href='/AdminProduct/productDetails/<?=$product->product_id?>'><?= htmlentities($product->product_id) ?></a></td>
					<td><?= htmlentities($product->product_name) ?></td>
					<td><?= htmlentities($product->category) ?></td>
					<td><?= htmlentities($product->sellingPrice) ?></td>
					<td><?= htmlentities($product->quantity) ?></td>

					<td>
						<!-- TODO: make function to delete product-->
						<a href='/AdminProduct/delete/<?=$product->product_id?>'><?= _('delete') ?></a> | 
						<!-- TODO: make function to edit product -->
						<a href='/AdminProduct/edit/<?=$product->product_id?>'><?= _('edit') ?></a>
					</td>
				</tr>
				<?php
				}
				?>
		</table>
	</div>
</div>

</body>