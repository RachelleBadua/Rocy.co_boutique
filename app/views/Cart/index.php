<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/cart.css">

<?php $this->view('shared/header',_('Cart'));?>

<!-- <body> -->

<?php $this->view('shared/navBar'); 
    $cart = $data['cart'];
    $detail = $data['detail'];
    $address = $data['address'];
?>
<h1 class='pageTitle'><?= _('My Cart')?></h1>
<div class='content'>
    <div class='main'>
        <div class='top'>
            <h3 onclick="toggleVisible('#products')"><?= _('1. Products')?><hr></h3>
            <div id='products'>
                <table style="width:100%">
                    <tr>
                        <th class='nameCol'><h5><?= _('Name')?></h5></th>
                        <th class='priceCol'><h5><?= _('Unit Price')?></h5></th>
                        <th class='qtyCol'><h5><?= _('Quantity')?></h5></th>
                        <th class='actionCol'><h5><?= _('Action')?></h5></th>
                    </tr>
                    <?php
                        foreach ($detail as $product) {
                            echo "
                                <tr>
                                    <th class='nameCol'><label>$product->product_name</label></th>
                                    <th class='priceCol'><label>$$product->sellingPrice</label></th>
                                    <th class='qtyCol'><input id='$product->product_id' class='qty' type='number' step='1' min='1' value='1'></th>
                                    <th class='actionCol'>
                                        <a id='deleteButton' href='/Cart/delete/$product->product_id'>Delete</a>
                                    </th>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>
        <div class='bottom'>
            <h3 onclick="toggleVisible('#shipMethod')"><hr><?= _('2. Shipping Method')?><hr></h3>
            <div style="display: none" id='shipMethod'>
                <table>
                    <tr class="shipMethodOpts">
                        <th >
                            <label><?= _('Pick Up')?></label>
                            <input type="radio" id="pickUp" name="shipMethod" value='pickUp'>
                        </th>
                        <th>
                            <label><?= _('Delivery')?></label>    
                            <input checked type="radio" id="delivery" name="shipMethod" value='delivery'>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label class="shipInfoLabel"><?= _('Phone Number:')?></label>
                            <input class="shipInfoInput" type="text" value="<?=$address->phoneNo?>">
                        </th>
                    </tr>
                    <tr class="address">
                        <th>
                            <label class="shipInfoLabel"><?= _('ddress:')?></label>
                            <input class="shipInfoInput" type="text" value="<?=$address->address?>">
                        </th>
                    </tr>
                    <tr class="address">
                        <th>
                            <label class="shipInfoLabel"><?= _('City:')?></label>
                            <input class="shipInfoInput" type="text" value="<?=$address->city?>">
                        </th>
                    </tr>
                    <tr class="address">
                        <th>
                            <label class="shipInfoLabel"><?= _('Province:')?></label>
                            <input class="shipInfoInput" type="text" value="<?=$address->province?>">
                        </th>
                    </tr>
                    <tr class="address">
                        <th>
                            <label class="shipInfoLabel"><?= _('Postal Code:')?></label>
                            <input class="shipInfoInput" type="text" value="<?=$address->postal?>">
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div id='submitBdiv'>
            <button id='submitB' onclick='placeOrder()'><?= _('Place Order')?></button>
        </div>
    </div>
</div>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#pickUp, #delivery').change(function () {
                if (isDelivery())
                    $('.address').show();
                else
                    $('.address').hide();
            });
        });

        function placeOrder() {
            const url = "/Cart/placeOrder";
            qtyInput = $('.qty').map(function() {
                var e = {
                    product_id: $(this).attr('id'),
                    qty: $(this).val()
                };
                return e;
            }).get();
            
            const data = {
                order_id: <?=$cart->order_id?>,
                isDelivery: isDelivery(),
                qty: qtyInput
            };
            $.post(url, data, function (op) {
                if (op == 0)
                    window.location.replace('/Cart/index?error=Cart is empty');
                else 
                    window.location.replace('/Cart/index?success=Order Placed');
                // console.log(op);
            })
        }

        function isDelivery() {
            return !$("#pickUp").is(":checked");
        }

        function toggleVisible(div) {
            var e = $(div);
            if (e.is(":visible"))
                e.slideUp();
            else
                e.slideDown();
        }
    </script>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>