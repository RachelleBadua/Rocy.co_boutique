<link rel="stylesheet" type="text/css" href="/resources/styles/product_page.css">

<?php $this->view('shared/header','Main Index'); ?>

<body>
<?php $this->view('shared/navBar'); ?>
	<div class="product_grid">
        <div class="sideBar">
            <p>sideBar</p>
        </div>
        <div class="vl"></div>
        <div class="products">
            <p>products</p>
            <?= var_dump($data) ?>
        </div>
    </div>
</body>
    
