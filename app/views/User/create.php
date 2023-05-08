<link rel="stylesheet" type="text/css" href="/resources/styles/login.css">


<?php $this->view('shared/header','Create Account'); ?>

<!-- <body> -->
	<?php $this->view('shared/navBar'); ?>
	<h1 class='pageTitle'>Create Account</h1>
	<div class="main" style="">
		
		<div class="inputLogin">
			<form class="formLogin " method="post" style=" width: 600;
			/*display: flex;*/
			/*justify-content: center;
		  	align-content: center;
		  	align-items: center;*/
		  	/*border: 1px solid black;*/
		  	margin: 2em auto;
			  
			  ">
			  <h1 class="" style="margin-top: 60px; margin-bottom: 20px;"></h1>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Email:') ?></label>
					<input class="btn-input" type="email" name="email" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Password:') ?></label>
					<input class="btn-input" type="password" name="password" required><br>
				</div>
				<br>
				<div class="btn-login" required>
					<label class="btn-label" ><?= _('Subscription:') ?></label>
						<input class="btn-input-checkbox" type="checkbox" name="subscription" value="0" >
						<label class="btn-label-checkbox" for="subscription"><?= _('Yes') ?></label>
						<input class="btn-input-checkbox" type="checkbox" name="subscription" value="1" >
						<label class="btn-label-checkbox" for="subscription"><?= _('No') ?></label>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Name:') ?></label>
					<input class="btn-input" type="text" name="name" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Phone Number:') ?></label>
					<input class="btn-input" type="tel" name="phoneNo" placeholder="XXXXXXXXXX" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Address:') ?></label>
					<input class="btn-input" type="text" name="address" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('City:') ?></label>
					<input class="btn-input" type="text" name="city" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Province:') ?></label>
					<input class="btn-input" type="text" name="province" required><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Postal Code:') ?></label>
					<input class="btn-input" type="text" name="postal" required><br>
				</div>
				<br>
				<!-- <input type="submit" name="action" value="create"> -->
				<input  type="submit" name="action" value="Create"><br>
				<br>

				<div class="">You have an account? <a href="/User/index">Login</a></div>
			</form>

			

		</div>

	</div>

	<script type="text/javascript" src="/resources/scripts/checkboxes.js"></script>
<!-- </body> -->