<link rel="stylesheet" type="text/css" href="/resources/styles/adminProductDetails.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Product Details')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div align="center" style="">
			<a href='/AdminProduct/index/'><?= _('back') ?></a>
			<h2><?= _('Product Details')?></h2>

			<form method ="post" action="" enctype="multipart/form-data">	
			<!-- TODO: add image here-->
				<div>
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
		    			<div>
							<img id="output" src="/resources/productImages/<?= $data->image?>" width="250">
						</div>
					</div>
				</div>
				<div class="insertProdInfo">
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('ID:') ?></label>
						<div class="btn-input"><?= $data->product_id ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Name:') ?></label>
						<div class="btn-input"><?= $data->product_name ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Category:') ?></label>
						<div class="btn-input"><?= $data->category ?></div>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Price:') ?></label>
						<div class="btn-input"><?= $data->sellingPrice ?></div>	
						<br>
					</div>
					<br>		
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Quantity:') ?></label>
						<div class="btn-input"><?= $data->quantity ?></div>
						<br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Description:') ?></label>
						<div class="btn-input"><?= $data->description ?></div>
						<br>
					</div>
					<br>
				</div >
			</form>
		</div>		
	</div>
</div>
