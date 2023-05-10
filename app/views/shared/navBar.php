<link rel="stylesheet" type="text/css" href="/resources/styles/navBar.css">
<!-- <link rel="stylesheet" href="/resources/styles/bootstrap.css">
<link rel="stylesheet" href="/resources/styles/home.css"> -->
<!-- <body> -->
<div class="bar">
    <div class="i1">
        <a href='?lang=en'>EN</a> <!-- This going to be drop downlist for internationalization -->
        <span>|</span>
        <a href='?lang=fr_CA'>FR</a>
        <span>|</span>
        <a href="/Product/index"><?= _('Products')?></a>
        <span>|</span>
        <a href="/Main/about_us"><?= _('About Us') ?></a>
        <span>|</span>
        <a href="/Contact/index"><?= _('Contact Us') ?></a>
    </div>
    <div class="i2">
        <a href="/Main/index"><img src="/resources/images/rocylogoTransBG.png"></a> <!-- this = HomePage -->
    </div>
    <div class="i3">
        <div></div>
        <a href="/MyAccount/index"><?= _('My Account') ?>
            <img class="accIcon">
        </a>
         <!-- not yet created -->
        <span></span>
        <a href="/Cart/index"><?= _('Cart') ?><img class="cartIcon"></a> <!-- not yet created -->
    </div>
</div>
