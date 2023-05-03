<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">

<?php $this->view('shared/header','Main Index'); $_SESSION['user_id'] = 1;?>

<!-- <body> -->

<?php $this->view('shared/navBar'); ?>

<h1 class='pageTitle'>My Cart</h1>
<div class='content'>
    <h2><?= $_SESSION['user_id'] ?></h2>
    <h2><?= var_dump($data) ?></h2>
</div>
</div>
<!-- </body> -->

