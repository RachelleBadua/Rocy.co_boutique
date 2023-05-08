<link rel="stylesheet" type="text/css" href="/resources/styles/adminEditAboutUs.css">
<script type="text/javascript" src="/resources/scripts/displayImage.js"></script>

<?php $this->view('shared/header', _('Edit About Us')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div align="center" style="">
			<!-- <a href='/AdminProduct/index/'><?= _('back') ?></a> -->
			<h2>Edit About Us</h2>
			<form method ="post" action="/AdminAboutUs/edit" enctype="multipart/form-data">	
				<div>
					<div class="addImage"> 
						<label><?= _('Image:') ?></label>
			    		<input type="file" name="image" onchange="loadFile(event)"/>
		    			<div>
							<img id="output" src="/resources/images/<?= $data->image?>" width="250">
						</div>
					</div>
				</div>
				<div class="insertProdInfo">
					<br>		
					<div class="btn-addProduct">
						<label class="btn-label"><?= _('Text:') ?></label>
						<textarea class="btn-input" name="text"><?= $data->text ?></textarea><br>
					</div>
					<br>
				</div>
					<input type="submit" name="action" value="Update">
			</form>
		</div>		
	</div>
</div>

