<link rel="stylesheet" type="text/css" href="/resources/styles/adminAddEditProduct.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Send Promotions')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<style>
			.content {
				height: 100%;
			}
		</style>
		<div align="center" style="">
			<!-- <a href='/AdminProduct/index/'><?= _('back') ?></a> -->
			<h2><?= _('Send Promotions') ?></h2>
			<form method ="post" action="" enctype="multipart/form-data">	
			<!-- TODO: add image here-->
				<!-- <div>
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
			    		<input type="file" name="image" onchange="loadFile(event)"/>
		    			<div>
							<img id="output" src="/resources/productImages/<?= $product->image?>" width="250">
						</div>
					</div>
				</div> -->
				<div class="insertProdInfo">
					<br>		
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Subject:') ?></label>
						<input class="btn-input" type="text" name="subject"><br>
					</div>
					<br>
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Message:') ?></label>
						<textarea class="btn-input" name="message"></textarea><br>
					</div>
					<br>
				</div>
					<input type="submit" name="action" value="<?= _('Send!')?>">
			</form>
		</div>		
	</div>
</div>

