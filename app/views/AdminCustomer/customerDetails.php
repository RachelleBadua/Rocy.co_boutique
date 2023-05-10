<link rel="stylesheet" type="text/css" href="/resources/styles/adminCustomerDetails.css">

<?php $this->view('shared/header', _('Customer Details')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div class="allDetails" align="center">
			<div class="top">
				<div class="backButton">
					<a class="btn btn-secondary" href='/AdminCustomer/index/'><?= _('back') ?></a>
				</div>
				<h2 class="title"><?= _('Customer Details') ?></h2>
			</div>
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
					<label class="btn-label"><?= _('Email:') ?></label>
					<div class="btn-input"><?= $data->email ?></div>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Phone Number:') ?></label>
					<div class="btn-input"><?= $data->phoneNo ?></div>	
					<br>
				</div>
				<br>		
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('Subscription:') ?></label>
					<div class="btn-input">
						<?php
							echo ($data->subscription == 0 ? "Yes" :  "No"); 
						?>
					</div>
					<br>
				</div>
				<br>
				<div class="btn-customerInfo">
					<label class="btn-label"><?= _('City:') ?></label>
					<div class="btn-input"><?= $data->city ?></div>
					<br>
				</div>
				<br>
			</div >
		</div>
	</div>
</div>