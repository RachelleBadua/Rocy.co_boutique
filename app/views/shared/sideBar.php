<link rel="stylesheet" type="text/css" href="/resources/styles/sidebar.css">


<!-- <body> -->

	

	<div class="content">
		<div class="sidenav">
			<div class="image">
				<a href="/MainAdmin/index"><img class="sidebarlogo" src="/resources/images/rocylogoTransBG.png"></a>
			</div>
			<div class="signout">
				<a href="?lang=en">EN</a>
			</div>
			<div class="signout">
				<a href="?lang=fr_CA">FR</a>
			</div>
			<button id="Products" class="dropdown-btn" name=""><?= _('Product')?> 
			<i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-container">
				<a href="/AdminProduct/index"><?= _('Product List')?></a>
				<a id="addProducts" href="/AdminProduct/create"><?= _('Add product')?></a>
				<a href="/AdminCategory/index"><?= _('Category')?></a>
				</div>
			<button class="dropdown-btn"><?= _('Orders')?> 
			<i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-container">
				<a href="/AdminOrder/index"><?= _('Order List')?></a>
				</div>
			<button class="dropdown-btn"><?= _('Customers')?> 
			<i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-container">
				<a href="/AdminCustomer/index"> <?= _('Customer List')?></a>
				<a href="/AdminCustomer/sendPromotions"><?= _('Send Promotions')?></a>
				</div>
			<button class="dropdown-btn"><?= _('About Us')?>
			<i class="fa fa-caret-down"></i>
			</button>
				<div class="dropdown-container">
				<a href="/AdminAboutUs/index"><?= _('Edit About Us')?></a>
				</div>
			<div class="signout">
				<a href="/User/logout"><?= _('Sign out')?></a>
			</div>
		</div>

<script src="/resources/scripts/dropdown.js"></script>