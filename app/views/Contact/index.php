<link rel="stylesheet" type="text/css" href="/resources/styles/contactUs.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">

<?php $this->view('shared/header', _('Contact Us')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar'); ?>

<h1 class="pageTitle" >Contact Us</h1>
<div class='outside'>
    <div class="main" style="">
        
        <div class="inputLogin">

            <form class="formLogin" method="post" style=" width: 600;
            /*display: flex;*/
            /*justify-content: center;
            align-content: center;
            align-items: center;*/
            /*border: 1px solid black;*/
            margin: 2em auto;
              
              ">
                <div class="btn-login ">
                    <label class="btn-label"><?= _('Email:') ?></label>
                    <input class="btn-input" type="email" name="email"><br>
                </div>
                <br>
                <div class="btn-login ">
                    <label class="btn-label"><?= _('Subject:') ?></label>
                    <input class="btn-input" type="text" name="subject"><br>
                </div>
                <br>
                <div class="btn-login">
                    <label class="btn-label"><?= _('Message:') ?></label>
                    <textarea class="btn-input" name="message"></textarea><br>
                </div>
                <br>
                    <input class="btn-contactUs" type="submit" name="action" value="Send"><br>
                <br>
            </form>
        </div>
    </div>
</div>
    
<?php  $this->view('shared/footer'); ?>
