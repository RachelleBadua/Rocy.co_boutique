<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/profileSecurity.css">
<?php $this->view('shared/header',_('Shipping Address')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar'); ?>
<h1 class='pageTitle'><?=_('Shipping Address')?></h1>
<div class='content'>
    <div class='main'>
        <table>
            <tr>
                <td><?=_('Address')?>:</td>
                <td class='input'><input id='address' disabled type="text" value="<?=$data->address?>"></td>
            </tr>
            <tr>
                <td><?=_('City')?>:</td>
                <td class='input'><input id='city' disabled type="text" value="<?=$data->city?>"></td>
            </tr>
            <tr>
                <td><?=_('Province')?>:</td>
                <td class='input'><input id='province' disabled type="text" value="<?=$data->province?>"></td>
            </tr>
            <tr>
                <td><?=_('Postal Code')?>:</td>
                <td class='input'><input id='postal' disabled type="text" value="<?=$data->postal?>"></td>
            </tr>
        </table>
        <div style='height: 30px'></div>
        <a id="backButton" class="btn btn-secondary" href="/MyAccount/index">Back</a>
        <a id="editButton" class="btn btn-success"><?=_('Edit')?></a>
    </div>
    <script>
        $('#editButton').attr('onclick', "setMode()");

        function setMode() {
            $('#editButton').attr('onclick', "update()");
            $('#editButton').html('Update');

            $('input').attr('disabled', false);
        }

        function update() {
            const url = "/MyAccount/updateAddress";
            const data ={
                address: $('#address').val(), 
                city: $('#city').val(), 
                province: $('#province').val(),
                postal: $('#postal').val()
            };
            $.post(url, data, function(op) {
                window.location.replace('/MyAccount/shipAddress?success=Address Updated');
            })
        }
    </script>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>