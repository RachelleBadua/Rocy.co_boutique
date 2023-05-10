<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/product_detail.css">

<?php $this->view('shared/header',_('Product Detail')); ?>

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
                <button id='addToCart'class='btn btn-success' onclick="addToCart()"><?=_('Add to Cart')?></button>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    const url = '/Cart/addToCart';
    const pId = <?= $data->product_id ?>;
    const pUrl = '/Product/productDetail/' + pId;
    function addToCart() {
        $.post(url, {product_id: <?= $data->product_id ?>},function(op) {
            if (op == 1)
                window.location.replace(pUrl.concat('?success=' + <?= _('Product added to cart')?>));
            else
            window.location.replace(pUrl.concat('?error=' + <?= _('Product is already in cart')?>));
        })
    }
</script>

<?php $this->view('shared/footer'); ?>