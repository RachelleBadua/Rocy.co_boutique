<link rel="stylesheet" type="text/css" href="/resources/styles/login.css">

<?php $this->view('shared/header','Login'); ?>

<!-- <body> -->
	<?php $this->view('shared/navBar'); ?>
	<h1 class='pageTitle'></h1>
	<div class="main" style="">
		
		<div class="inputLogin">

			<form class="formLogin" method="post" style=" width: 600;
			/*display: flex;*/
			/*justify-content: center;
		  	align-content: center;
		  	align-items: center;*/
		  	/*border: 1px solid black;*/
		  	margin: 2em auto;
			  
			  ">
			  <h1 class="" style="margin-bottom: 50px;">Log In</h1>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Email:') ?></label>
					<input class="btn-input" type="email" name="email"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Password:') ?></label><input class="btn-input" type="password" name="password"><br>
				</div>
				<br>
				<input type="submit" name="action" value="Login"><br>
				<br>

				<div class="">Don't have an account? <a href="/User/create">Create</a></div>
			</form>

			

		</div>

	</div>
<!-- </body> -->

