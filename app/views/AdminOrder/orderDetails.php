<link rel="stylesheet" type="text/css" href="/resources/styles/adminCustomerDetails.css">

<?php $this->view('shared/header', _('Order Details')); ?>
<?php $this->view('shared/sideBar'); ?>
<?php
	$clientInfo = $data['clientInfo'][0];
	$products = $data['products'];
	
?>

	<div class="main">
		<div class="allDetails" align="center">
			<div class="top">
				<div class="backButton">
					<a class="btn btn-secondary" href='/AdminOrder/index/'><?= _('back') ?></a>
				</div>
				<h2 class="title">Order Details</h2>
			</div>
			<div class="infoCustomer">
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Order ID:') ?></label>
					<div class="btn-input"><?= $clientInfo->user_id ?></div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Client Name:') ?></label>
					<div class="btn-input"><?= $clientInfo->name ?></div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Client Email:') ?></label>
					<div class="btn-input"><?= $clientInfo->email ?></div>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Products:') ?></label>
					<!-- Have to make a foreach and display the name of product and the quantity -->
					<?php foreach ($products as $product){ ?>
						<div class="btn-input"><?= $product->product_name ?></div>	
						<div class="btn-input"><?= $product->quantity ?></div>	
						<br>
					<?php
					}
					?>
				</div>
				<br>		
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Total Price:') ?></label>
					<div class="btn-input"><?= $clientInfo->total_price ?></div>
					<br>
				</div>
				<br>
			</div >
		</div>
	</div>
</div>