<link rel="stylesheet" type="text/css" href="/resources/styles/login.css">

<?php $this->view('shared/header', _('Login')); ?>

<!-- <body> -->
	<h1 class='pageTitle'><?= _('Log In')?></h1>
	<div class="main" style="">
	<a href="/Main/index"><img class="logoImage" src="../resources/images/rocylogoTransBG.png" alt=""></a>

		<div class="inputLogin">
			<form class="formLogin" method="post" style=" width: 600;
			/*display: flex;*/
			/*justify-content: center;
		  	align-content: center;
		  	align-items: center;*/
		  	/*border: 1px solid black;*/
		  	margin: 2em auto;
			">
			
				<div class="btn-login ">
					<label class="btn-label"><?= _('Email:') ?></label>
					<input class="btn-input" type="email" name="email"><br>
				</div>
				<br>
				<div class="btn-login ">
					<label class="btn-label"><?= _('Password:') ?></label><input class="btn-input" type="password" name="password"><br>
				</div>
				<br>
				<div class='tools'>
					<input class="loginButton" type="submit" name="action" value="Login"><br>
					<br>
					<div class="createAcc"><?= _('Don\'t have an account? ')?><a href="/User/create">Create</a></div>

				</div>
				
			</form>

			

		</div>

	</div>
<!-- </body> -->

