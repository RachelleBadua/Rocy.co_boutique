<?php $this->view('shared/header','Main Index'); ?>


<body>

<?php $this->view('shared/navBar'); ?>

	<div class="carouselSize">
  <h2>Featured Bunnies</h2>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/Product/index"><img src="/resources/images/bunny.jpg"  class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href="/Product/index"> <img src="/resources/images/bunny2.webp" class="d-block w-100" alt="..."></a>
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
</body>

<script src="/resources/scripts/bootstrap.js"></script>
