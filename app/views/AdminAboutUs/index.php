<link rel="stylesheet" type="text/css" href="/resources/styles/adminEditAboutUs.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Edit About Us')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div align="center" style="">
			<!-- <a href='/AdminProduct/index/'><?= _('back') ?></a> -->
			<h2><?= _('Edit About Us') ?></h2>
			<form method ="post" action="" enctype="multipart/form-data">	
				
				<div class="insertProdInfo">
				<!-- <div> -->
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
			    		<input class="chooseImage" type="file" name="image" onchange="loadFile(event)" />
		    			<div>
							<img class="theImage"id="output" src="/resources/images/<?= $data->image ?>" >
						</div>
					</div>
				<!-- </div> -->
					<br>		
					<div class="editText">
						<!-- <label class="btn-label"><?= _('Text:') ?></label> -->
						<textarea class="btn-input" name="text"><?= $data->text ?></textarea><br>
					</div>
					<br>
				</div>
					<input type="submit" name="action" value="<?= _('Update')?>">
			</form>
		</div>		
	</div>
</div>

