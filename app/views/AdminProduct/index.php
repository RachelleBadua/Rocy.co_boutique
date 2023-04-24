<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Product list')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		
		<h2>Product List</h2>
		<table>
			<!-- <tbody> -->
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Category</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Actions</th>
				</tr>
				<!-- print_r(getenv()); -->
					foreach ($products as $product) { ?>
					<tr>
						<td><?= htmlentities($product->product_id) ?></td>
						<td><?= htmlentities($product->product_name) ?></td>
						<td><?= htmlentities($product->category_id) ?></td>
						<td><?= htmlentities($product->sellingPrice) ?></td>
						<td><?= htmlentities($product->quantity) ?></td>

						<td>
							<!-- TODO: make function to delete product-->
							<a href='/AdminProduct/delete/<?=$service->service_id?>'><?= _('delete') ?></a> | 
							<!-- TODO: make function to edit product -->
							<a href='/Service/edit/<?=$service->service_id?>'><?= _('edit') ?></a>
						</td>
					</tr>
				<?php
				}
				?>
			<!-- </tbody> -->
		</table>
	</div>

</body>