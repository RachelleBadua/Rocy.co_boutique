<?php $this->view('shared/header','Main Index'); ?>
<?php $this->view('shared/navBar'); ?>

<link rel="stylesheet" href="/resources/styles/bootstrap.css">
<link rel="stylesheet" href="/resources/styles/home.css">


<!-- from here is still in a div Wrapper, div Wrapper start in header.php and close in footer.php. --> 

<div class="body">
	<div class="carouselSize">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/resources/images/bunny.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/resources/images/bunny2.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<script src="/resources/scripts/bootstrap.js"></script>

<?php $this->view('shared/footer'); ?>