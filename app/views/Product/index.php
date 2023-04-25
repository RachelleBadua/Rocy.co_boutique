<link rel="stylesheet" type="text/css" href="/resources/styles/product_page.css">

<?php $this->view('shared/header','Main Index'); ?>

<body>
<?php $this->view('shared/navBar'); ?>
<h1>Catalog</h1>
	<div class="product_grid">
        <div class="sideBar">
            <p>sideBar</p>
        </div>
        <div class="vl"></div>
        <div class="products">
            <div class="grid-container">
                <?php foreach($data as $product) {?>
                    <div class="grid-item">
                        <?php 
                            echo "<img src='/resources/productImages/$product->image'>";
                            echo "<h3>".ucwords($product->product_name)."<h3>";
                            // echo "<h4 class='price'>\$$product->sellingPrice";
                        ?>
                    </div>
                <?php } ?>
                <?php foreach($data as $product) {?>
                    <div class="grid-item">
                        <?php 
                            echo "<img src='/resources/productImages/$product->image'>";
                            echo "<h3>".ucwords($product->product_name)."<h3>";
                            // echo "<h4 class='price'>\$$product->sellingPrice";
                        ?>
                    </div>
                <?php } ?>
                <?php foreach($data as $product) {?>
                    <div class="grid-item">
                        <?php 
                            echo "<img src='/resources/productImages/$product->image'>";
                            echo "<h3>".ucwords($product->product_name)."<h3>";
                            // echo "<h4 class='price'>\$$product->sellingPrice";
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
    
<?php 

?>
