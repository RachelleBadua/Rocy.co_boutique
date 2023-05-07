<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/cart.css">

<?php $this->view('shared/header','Main Index');?>

<!-- <body> -->

<?php $this->view('shared/navBar'); 
    $cart = $data['cart'];
    $detail = $data['detail'];
    $address = $data['address'];
?>
<h1 class='pageTitle'>My Cart</h1>
<div class='content'>
        <div class='left'>
            <div class='top'>
                <h3 onclick="toggleVisible('#products')">1. Products<hr></h3>
                <div id='products'>
                    <table style="width:100%">
                        <tr>
                            <th><h5>Name</h5></th>
                            <th><h5>Unit Price</h5></th>
                            <th><h5>Quantity</h5></th>
                            <th><h5 style="width: 100%; text-allign:center">Action</h5></th>
                        </tr>
                        <?php
                            foreach ($detail as $product) {
                                echo "
                                    <tr>
                                        <th>$product->product_name</th>
                                        <th>$product->sellingPrice</th>
                                        <th>$product->quantity</th>
                                        <th>
                                            <a href='/Cart/delete/$product->product_id'>Delete</a>
                                        </th>
                                    </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class='bottom'>
                <h3 onclick="toggleVisible('#shipMethod')"><hr>2. Shipping Method<hr></h3>
                <div style="display: none" id='shipMethod'>
                    <table>
                        <tr class="shipMethodOpts">
                            <th >
                                <label>Pick Up</label>
                                <input type="radio" id="pickUp" name="shipMethod" value='pickUp'>
                            </th>
                            <th>
                                <label>Delivery</label>    
                                <input checked type="radio" id="delivery" name="shipMethod" value='delivery'>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <label class="shipInfoLabel">Phone Number:</label>
                                <input class="shipInfoInput" type="text" value="<?=$address->phoneNo?>">
                            </th>
                        </tr>
                        <tr class="address">
                            <th>
                                <label class="shipInfoLabel">Address:</label>
                                <input class="shipInfoInput" type="text" value="<?=$address->address?>">
                            </th>
                        </tr>
                        <tr class="address">
                            <th>
                                <label class="shipInfoLabel">City:</label>
                                <input class="shipInfoInput" type="text" value="<?=$address->city?>">
                            </th>
                        </tr>
                        <tr class="address">
                            <th>
                                <label class="shipInfoLabel">Province:</label>
                                <input class="shipInfoInput" type="text" value="<?=$address->province?>">
                            </th>
                        </tr>
                        <tr class="address">
                            <th>
                                <label class="shipInfoLabel">Postal Code:</label>
                                <input class="shipInfoInput" type="text" value="<?=$address->postal?>">
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class='right'>
            <div class='Summary'>
                <h3>Summary</h3>
                <table>
                    <tr>
                        <th><label>Item Price:</label></th>
                        <th class='price'><label>$<?=$cart->total_price?></label></th>
                    </tr>
                    <!-- <tr>
                        <th><label>Shipping Fee:</label></th>
                        <th><label>$0</label></th>
                    </tr> -->
                    <tr>
                        <th colspan='2'>
                            <hr>
                        </th>
                    </tr>
                    <tr>
                        <th><label>Total:</label></th>
                        <th class='price'><label>$<?=$cart->total_price?></label></th>
                    </tr>
                </table>
            </div>
            <div id='submitBdiv'>
                <button id='submitB' onclick='placeOrder()'>Place Button</button>
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
            url = "/Cart/placeOrder?order_id=<?=$cart->order_id?>&isDelivery=";
            url = url.concat(isDelivery());
            $.post(url, () => {})
            .done(() => {
                window.location.replace('/Cart/index?success=Order Placed');
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

