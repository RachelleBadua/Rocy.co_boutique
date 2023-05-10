<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Product List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<h2><?= _('Product List')?></h2>
		<table>
				<tr>
					<!-- <div class="attributes"> -->
					<th class="attributes"><?= _('ID')?></th>
					<th class="attributes"><?= _('Name')?></th>
					<th class="attributes"><?= _('Category')?></th>
					<th class="attributes"><?= _('Price')?></th>
					<th class="attributes"><?= _('Qty')?></th>
					<th class="attributes"><?= _('Actions')?></th>
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