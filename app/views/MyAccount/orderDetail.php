<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/orderDetail.css">

<?php $this->view('shared/header', _('Order Detail')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar');
$order = $data['order'];
$detail = $data['detail'];
?>

<h1 class='pageTitle'><?=_('Order Detail')?></h1>
<div class='content'>
    <a class="btn btn-secondary" href="/MyAccount/myOrders"><?= _('Back')?></a>
    <div class='detail'>
        <table class='order'>
            <tr>
                <td class='left'><?=_('Order Number')?>:</td>
                <td class='right'><?=$order->order_id?></td>
            </tr>
            <tr>
                <td class='left'><?=_('Order Date')?>:</td>
                <td class='right'><?=$order->order_date?></td>
            </tr>
            <tr>
                <td class='left'><?=_('Status')?>:</td>
                <td class='right'><?=$order->status?></td>
            </tr>
            <tr>
                <td class='left'><?=_('Shipping Method')?>:</td>
                <td class='right'><?=$order->isDelivery ? _('Delivery') : _('Pick Up')?></td>
            </tr>
            <tr>
                <td class='left'><?=_('Total Price')?>:</td>
                <td class='right'>$<?=$order->total_price?></td>
            </tr>
            <tr>
                <th class='left'><label><?=_('Products')?></label></th>
                <th class='right'><label><?=_('Quantity')?></label></th>
            </tr>
            <?php foreach($detail as $product) {
                echo "<tr><td id='name' class='left'>$product->product_name</td>";
                echo "<td class='right'>$product->quantity</td></tr>";
            }
            ?>
        </table>
    </div>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>