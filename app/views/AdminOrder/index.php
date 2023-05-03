<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Order List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		
		<h2>Order List</h2>
		<table>
			
				<tr>
					<th class="attributes">ID</th>
					<th class="attributes">Client Email</th>
					<th class="attributes">Order Date</th>
					<th class="attributes">Status</th>
					<th class="attributes">Actions</th>
				</tr>
			
				<?php foreach ($data as $order) { ?>
				<tr>

					<td><a href='/AdminOrder/orderDetails/<?=$order->order_id?>'><?= htmlentities($order->order_id) ?></a></td>
					<td><?= htmlentities($order->email) ?></td>
					<td><?= htmlentities($order->order_date) ?></td>
					<td><?= htmlentities($order->status) ?></td>
					<td><?= htmlentities($order->total_price) ?></td>

					<td>
						<!-- TODO: make function to delete product-->
						<!-- <a href='/AdminProduct/delete/<?=$product->product_id?>'><?= _('delete') ?></a> |  -->
						<!-- TODO: make function to edit product -->
						<a href='/AdminOrder/edit/<?=$order->order_id?>'><?= _('edit') ?></a>
					</td>
				</tr>
				<?php
				}
				?>
		</table>
	</div>
</div>

</body>