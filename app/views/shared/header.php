<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $data ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/resources/styles/default.css">

	<link rel="stylesheet" href="/resources/styles/bootstrap.css">
	<link rel="stylesheet" href="/resources/styles/home.css">
</head>
	
<body>
	<?php
		if(isset($_GET['success'])){
			echo '<div class="alert alert-success"><button data-bs-dismiss="alert">close</button>'. $_GET['success'].'</div>';
		}
		if(isset($_GET['error'])){
			echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
		}
		?>