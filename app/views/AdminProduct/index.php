<!-- <link rel="stylesheet" type="text/css" href="/resources/styles/adminMainContent.css"> -->
<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Product List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		
		<h2>Product List</h2>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Category</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Actions</th>
			</tr>
				<?php foreach ($data as $product) { ?>
				<tr>
					<td><?= htmlentities($product->product_id) ?></td>
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