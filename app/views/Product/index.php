<link rel="stylesheet" type="text/css" href="/resources/styles/product_page.css">

<?php $this->view('shared/header','Main Index'); ?>

<body>
<?php $this->view('shared/navBar'); 
$cur_cat = 0;
?>
<h1>Catalog</h1>
	<div class="catalog">
        <div class="sideBar">
            <div class='search-tool'>
                <form action="/Product/index" method='GET'>
                    <input type="text" class="search-value" placeholder="Search product name" name="search" value=""/>
                    <button type="submit"><img src="/resources/images/searchIcon.png"></button>
                </form>
            </div>
            <div class="hl"></div>
            <h4>Category:</h4>
            <?php foreach($data as $product) {
                if ($product->category_id != $cur_cat) {
                    $cur_cat = $product->category_id;
                    echo "<h6><a href='#$product->category'>" . ucwords($product->category) . "</a></h6>";
                }
                }
                $cur_cat = 0;
            ?>
        </div>
        <div class="vl"></div>
        <div class="products">
            <?php foreach($data as $product) {
                if ($product->category_id != $cur_cat) {
                    if ($cur_cat > 0) echo "</div>";
                    $cur_cat = $product->category_id;
                    echo "<h2 id='$product->category'>" . ucwords($product->category) . "</h2>";
                    echo "<div class='grid-container'>";
                }
            ?>
                <div class="grid-item">
                    <?php 
                        echo "<a href=''><img src='/resources/productImages/$product->image'>";
                        echo "<h3>".ucwords($product->product_name)."</h3></a>";
                    ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</body>
    
<?php $this->view('shared/footer'); ?>
