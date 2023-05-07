<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/myOrders.css">
<?php $this->view('shared/header', _('My Orders')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar'); ?>
<h1 class='pageTitle'>My Orders</h1>
<div class='content'>
<table>
    <tr class="attributes">
        <th>Order Number</th>
        <th>Order Date</th>
        <th>Status</th>
    </tr>

    <?php foreach ($data as $order) { ?>
        <tr>
            <td><a href='/MyAccount/orderDetail'><?= htmlentities($order->order_id) ?></a></td>
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




