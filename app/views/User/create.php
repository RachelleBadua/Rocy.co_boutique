<link rel="stylesheet" type="text/css" href="/resources/styles/login.css">

<?php $this->view('shared/header','Create Account'); ?>

<!-- <body> -->
	<?php $this->view('shared/navBar'); ?>
	<h1 class='pageTitle'></h1>
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
			  <h1 class="" style="margin-bottom: 50px;">Create Account</h1>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Email:') ?></label>
					<input class="btn-input" type="text" name="email"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Password:') ?></label>
					<input class="btn-input" type="text" name="password"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Subscription:') ?></label>
					<!-- <div class="box"> -->
						<input class="btn-input" type="checkbox" name="subscription" value="0">
						<label for="subscription"><?= _('Yes') ?></label>
					<!-- </div> -->
					<!-- <div class="box" style=""> -->
						<input class="btn-input" type="checkbox" name="subscription" value="1">
						<label for="subscription"><?= _('No') ?></label>
					<!-- </div> -->
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Name:') ?></label>
					<input class="btn-input" type="text" name="name"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Phone Number:') ?></label>
					<input class="btn-input" type="text" name="phoneNo"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Address:') ?></label>
					<input class="btn-input" type="text" name="address"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('City:') ?></label>
					<input class="btn-input" type="text" name="city"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Province:') ?></label>
					<input class="btn-input" type="text" name="province"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Postal Code:') ?></label>
					<input class="btn-input" type="text" name="postal"><br>
				</div>
				<br>
				<!-- <input type="submit" name="action" value="create"> -->
				<input  type="submit" name="action" value="Create"><br>
				<br>

				<div class="">You have an account? <a href="/User/index">Login</a></div>
			</form>

			

		</div>

	</div>
<!-- </body> -->