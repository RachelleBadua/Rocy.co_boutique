<link rel="stylesheet" type="text/css" href="/resources/styles/adminCustomerDetails.css">

<?php $this->view('shared/header', _('Customer Details')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div class="top">
			<a href='/AdminCustomer/index/'><?= _('back') ?></a>
			<h2>Customer Details</h2>
		</div>
		<form method ="post" action="" enctype="multipart/form-data">	
			<div class="infoCustomer">
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('ID:') ?></label>
					<div class="btn-input"><?= $data->user_id ?></div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Name:') ?></label>
					<div class="btn-input"><?= $data->name ?></div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Category:') ?></label>
					<div class="btn-input"><?= $data->email ?></div>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Price:') ?></label>
					<div class="btn-input"><?= $data->phoneNo ?></div>	
					<br>
				</div>
				<br>		
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Quantity:') ?></label>
					<div class="btn-input"><?= $data->subscription ?></div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Description:') ?></label>
					<div class="btn-input"><?= $data->city ?></div>
					<br>
				</div>
				<br>
			</div >
			</form>
	</div>