<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/home.css">
<link rel="stylesheet" href="/resources/styles/bootstrap.css">

<?php $this->view('shared/header', _('Home')); ?>

<!-- <body> -->

<?php $this->view('shared/navBar'); ?>

<h1 class='pageTitle'><?= _('Home Page')?></h1>
<div class='content'>
<div class="carouselSize">
  <div class="container text-center my-3">
  <h2 id="headerText" style='display=block; margin-bottom:25px'><?=_('Latest Product')?></h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                    for ($i = 0; $i < 6 && $i < count($data); $i++) {
                        $p = $data[$i];
                ?>
                    <a href='/Product/productDetail/<?=$p->product_id?>' class="carousel-item <?php if ($i == 1) echo 'active'?>">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-img">
                                    <img src="/resources/productImages/<?=$p->image?>" class="img-fluid">
                                </div>
                                <div class="card-img-overlay"></div>
                            </div>
                        </div>
                    </a>
                <?php
                    }
                ?>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
</div>
</div>
<!-- </body> -->
<?php $this->view('shared/footer'); ?>
<script src="/resources/scripts/carousel.js"></script> 
<script src="/resources/scripts/bootstrap.js"></script>
