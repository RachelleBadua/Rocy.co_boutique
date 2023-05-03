<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">

<?php $this->view('shared/header','Main Index'); ?>

<!-- body -->
<?php $this->view('shared/navBar');?>

<h1 class='pageTitle'></h1>
<div class='content'>
    <a href="/Product/index">Back</a>
    <div class='product_img'>
        <img src="/resources/productImages/<?= $data->image ?>">
    </div>
    <div class='information_tools'>
        <div class='information'>
            <h3 class='product_name'><?= ucwords($data->product_name) ?></h2>
            <h6 class='price'><?= $data->sellingPrice ?></h4>
            <p class='product_desc'><?= $data->description ?></p>
        </div>
        <div class='tools'>
            <a href="/Product/addToCart/<?= $data->product_id ?>"><button>Add to cart</button></a>
        </div>
    </div>

</div>
    
<?php $this->view('shared/footer'); ?>
