<link rel="stylesheet" type="text/css" href="/resources/styles/aboutUs.css">

<?php $this->view('shared/header','About Us'); ?>

    <?php $this->view('shared/navBar'); ?>
    <h1 class='pageTitle'>About Us</h1>
    <div class="main" style="">
        
        <div class="infoAboutUs">
            <div class="displayImage">
                <img class="image" src="/resources/images/<?= $data->image?>">                
            </div>

            <div class="displayText">
                <?= $data->text?>
            </div>
        </div>

    </div>
</div>

<?php  $this->view('shared/footer'); ?>