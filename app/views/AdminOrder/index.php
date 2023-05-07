<link rel="stylesheet" type="text/css" href="/resources/styles/adminOrderList.css">

<?php $this->view('shared/header', _('Order List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		
		<h2 class="title">Order List</h2>
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

				<td><a class="orderID" href='/AdminOrder/orderDetails/<?=$order->order_id?>'><?= htmlentities($order->order_id) ?></a></td>
				<td><?= htmlentities($order->email) ?></td>
				<td><?= htmlentities($order->order_date) ?></td>
				<td><?= htmlentities($order->status) ?></td>
				<td>
					<?php if ($order->status=='ordered') { ?>
						<button class="btn btn-success">
							<a class="orderStatus" href='/AdminOrder/edit/<?=$order->order_id?>'>
								<?= $order->status=='ordered' ? _('done') : _('undone') ?>
							</a>
						</button>
					
					<?php	
					} else { ?>
						<button class="btn btn-danger">
							<a class="orderStatus" href='/AdminOrder/edit/<?=$order->order_id?>'>
								<?= $order->status=='ordered' ? _('done') : _('undone') ?>
							</a>
						</button>
					<?php
					}
					?>
						
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>

</body>