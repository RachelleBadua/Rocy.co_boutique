<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/myOrders.css">
<?php $this->view('shared/header', _('My Orders')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar'); ?>
<h1 class='pageTitle'><?= _('My Orders')?></h1>
<div class='content'>
<table>
    <tr class="attributes">
        <th><?= _('Order Number')?></th>
        <th><?= _('Order Date')?></th>
        <th><?= _('Status')?></th>
    </tr>

    <?php foreach ($data as $order) { ?>
        <tr>
            <td><a href='/MyAccount/orderDetail/<?=$order->order_id?>'><?= htmlentities($order->order_id) ?></a></td>
            <td><?= htmlentities($order->order_date) ?></td>
            <td><?= htmlentities($order->status) ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>




