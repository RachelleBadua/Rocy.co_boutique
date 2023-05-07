<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductList.css">

<?php $this->view('shared/header', _('Customer List')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		
		<h2>Customer List</h2>
		<table>
			<tr>
				<th class="attributes"><?= _('ID') ?></th>
				<th class="attributes"><?= _('Name') ?></th>
				<th class="attributes"><?= _('Email') ?></th>
				<th class="attributes"><?= _('Subscription') ?></th>
			</tr>
			
			<?php foreach ($data as $customer) { ?>
			<tr>
				<td><a href='/adminCustomer/customerDetails/<?=$customer->user_id?>'><?= htmlentities($customer->user_id) ?></a></td>
				<td><?= htmlentities($customer->name) ?></td>
				<td><?= htmlentities($customer->email) ?></td>
				<td><?= htmlentities($customer->subscription == 0 ? "Yes" :  "No") ?></td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>

</body>