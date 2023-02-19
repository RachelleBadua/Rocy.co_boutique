<?php $this->view('shared/header','Main Index'); ?>
<?php $this->view('shared/navBar'); ?>
<link rel="stylesheet" type="text/css" href="/resources/styles/product_page.css">

<!-- from here is still in a div Wrapper, div Wrapper start in header.php and close in footer.php. --> 

<div class="body">
    <div class="product_grid">
        <div class="product_box">

        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>