<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/product_detail.css">

<?php $this->view('shared/header','Product Detail'); ?>

<!-- body -->
<?php $this->view('shared/navBar');?>

<h1 class='pageTitle'></h1>
<div class='content'>
    <div class ='main'>
        <div class='img'>
            <img src="/resources/productImages/<?= $data->image ?>">
        </div>
        <div class='vl'></div>
        <div class='left'>
            <div class='information'>
                <h3 class='product_name'><?= ucwords($data->product_name) ?></h2>
                <h6 class='price'>$<?= $data->sellingPrice ?></h4>
                <p class='product_desc'><?= $data->description ?></p>
            </div>
            <div class='button'>
                <button class='btn btn-success' onclick="addToCart()"><?=_('Add to Cart')?></button>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    const url = '/Cart/addToCart/<?= $data->product_id ?>';
    const pUrl = '/Product/productDetail/<?= $data->product_id ?>';
    function addToCart() {
        $.post(url, () => {})
        .done(() => {
            window.location.replace(pUrl.concat('?success=Product added to cart'))
        })
    }
</script>

<?php $this->view('shared/footer'); ?>