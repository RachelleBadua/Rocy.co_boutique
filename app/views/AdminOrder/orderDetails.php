<link rel="stylesheet" type="text/css" href="/resources/styles/adminOrderDetails.css">

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
				<h2 class="title"><?= _('Order Details')?></h2>
			</div>
			<div class="infoCustomer">
				<div class="btn-orderInfo">
					<label class="btn-label"><?= _('Order ID:') ?></label>
					<div class="btn-input"><?= $clientInfo->user_id ?></div>
					<br>
				</div>
				<br>
				<div class="btn-orderInfo">
					<label class="btn-label"><?= _('Client Name:') ?></label>
					<div class="btn-input"><?= $clientInfo->name ?></div>
					<br>
				</div>
				<br>
				<div class="btn-orderInfo">
					<label class="btn-label"><?= _('Client Email:') ?></label>
					<div class="btn-input"><?= $clientInfo->email ?></div>
				</div>
				<br>
				<div class="btn-orderInfo">
					<label class="btn-labelProducts"><?= _('Products:') ?></label>
					<!-- Have to make a foreach and display the name of product and the quantity -->
					<!-- 
					<?php foreach ($products as $product){ ?>
						<div class="productsQty">
							<div class="btn-input"><?= $product->product_name ?></div>	
							<div class="btn-input"><?= $product->quantity ?></div>	
							<br>
						</div>
					<?php
					}
					?>
 -->

 					<table class="btn-productsQty">
			
						<tr>
							<th class="attributes"><?= _('Product')?></th>
							<th class="attributes"><?= _('Quantity')?></th>
						</tr>

						<?php foreach ($products as $product){ ?>
						<!-- <div class="productsQty"> -->
						<tr>
							<td><?= htmlentities($product->product_name) ?></td>
							<td><?= htmlentities($product->quantity) ?></td>
							<!-- <div class="btn-input"><?= $product->product_name ?></div>	 -->
							<!-- <div class="btn-input"><?= $product->quantity ?></div>	 -->
							<!-- <br> -->
						</tr>
					<?php
					}
					?>

					</table>


				</div>
				<br>		
				<div class="btn-orderInfo">
					<label class="btn-label"><?= _('Total Price:') ?></label>
					<div class="btn-input"><?= $clientInfo->total_price ?></div>
					<br>
				</div>
				<br>
				<div class="btn-orderInfo">
					<label class="btn-label"><?= _('Delivery:') ?></label>
					<div class="btn-input"><?= ($clientInfo->isDelivery == 0 ? _('YES') : _('NO')) ?></div>
					<br>
				</div>
			</div >
		</div>
	</div>
</div>