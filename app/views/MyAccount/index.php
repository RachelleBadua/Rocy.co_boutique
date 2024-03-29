<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/myAccount.css">

<?php $this->view('shared/header', _('My Account'));?>

<!-- <body> -->

<?php $this->view('shared/navBar'); ?>

<h1 class='pageTitle'><?=_('My Account')?></h1>
<div class='content'>
    <div class='button'>
        <a href="/MyAccount/myOrders">
            <div>
                <img src="../resources/images/myOrders.png">
                <div class='label'>
                    <h2><?=_('My Orders')?></h2>
                    <label><?=_("View all orders and track order's status")?></label>
                </div>
            </div>
        </a>
    </div>
    <div class='button'>
        <a href="/MyAccount/profileSecurity">
            <div>
                <img src="../resources/images/security.png">
                <div class='label'>
                    <h2><?=_('Profile & Security')?></h2>
                    <label><?=_("Manage profile and security's information")?></label>
                </div>
            </div>
        </a>
    </div>
    <div class='button'>
        <a href="/MyAccount/shipAddress">
            <div>
                <img src="../resources/images/shipAddress.png">
                <div class='label'>
                    <h2><?=_('Shipping Address')?></h2>
                    <label><?=_('Edit shipping address')?></label>
                </div>
            </div>
        </a>
    </div>
    <div class="signout">
        <a href="/User/logout"><button><?= _('Sign out')?></button></a>
    </div>
</div>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>