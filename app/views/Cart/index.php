<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">

<?php $this->view('shared/header','Main Index');?>

<!-- <body> -->

<?php $this->view('shared/navBar'); 
    $cart = $data['cart'];
    $detail = $data['detail'];
    $address = $data['address'];
?>
<h3><?= var_dump($data) ?></h3>
<h1 class='pageTitle'>My Cart</h1>
<div class='content'>
    <div class='left'>
        <div class='top'>
            <h3 onclick='toggleProducts()'>1. Products</h3>
            <div id='products'>
                <table style="width:100%">
                    <tr>
                        <th><h5>Name</h5></th>
                        <th><h5>Unit Price</h5></th>
                        <th><h5>Quantity</h5></th>
                    </tr>
                    <?php
                        foreach ($detail as $product) {
                            echo "
                                <tr>
                                    <th>$product->product_name</th>
                                    <th>$product->sellingPrice</th>
                                    <th>$product->quantity</th>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class='bottom'>
            <h3 onclick='toggleShipMethod()'>2. Shipping Method</h3>
            <div id='shipMethod'>
                <p>546</p>
            </div>
        </div>
    </div>
    <div class='right'>

    </div>
</div>
    <script type='text/javascript'>
        function toggleProducts() {
            var e = $('#products');
            if (e.is(":visible"))
                e.slideUp();
            else
                e.slideDown();
        }
        function toggleShipMethod() {
            var e = $('#shipMethod');
            if (e.is(":visible"))
                e.slideUp();
            else
                e.slideDown();
        }
    </script>
</div>
<!-- </body> -->

