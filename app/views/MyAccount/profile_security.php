<link rel="stylesheet" type="text/css" href="/resources/styles/pageContent.css">
<link rel="stylesheet" type="text/css" href="/resources/styles/profileSecurity.css">

<?php $this->view('shared/header',_('Profile & Security')); ?>

<!-- <body> -->
<?php $this->view('shared/navBar');
$user = $data['user'];
$profile = $data['profile'];
?>

<h1 class='pageTitle'><?=_('Profile & Security')?></h1>
<div class='content'>
    <div class='main'>
        <table>
            <tr>
                <td><?=_('Name')?>:</td>
                <td class='input'><input id='name' disabled type="text" value="<?=$profile->name?>"></td>
            </tr>
            <tr>
                <td><?=_('Phone Number')?>:</td>
                <td class='input'><input id='phoneNo' disabled type="text" value="<?=$profile->phoneNo?>"></td>
            </tr>
            <tr>
                <td><?=_('New Password')?>:</td>
                <td class='input'><input id='password' disabled type="password" value=""></td>
            </tr>
        </table>
        <div id='space'>
            <div hidden id='showPswdRow'>
                <input type="checkbox" id='showPswd'>
                <?= _('Show Password')?>
            </div>
        </div>
        <a id="backButton" class="btn btn-secondary" href="/MyAccount/index">Back</a>
        <a id="editButton" class="btn btn-success"><?=_('Edit')?></a>
    </div>
    <script>
        $('#editButton').attr('onclick', "setMode()");
        $('#showPswd').on('change', function() {
            if ($('#showPswd').is(':checked'))
                $('#password').attr('type', 'text')
            else
                $('#password').attr('type', 'password')
        });

        function setMode() {
            $('#editButton').attr('onclick', "update()");
            $('#editButton').html('Update');

            $('input').attr('disabled', false);
            $('#showPswdRow').attr('hidden', false);
        }

        function update() {
            const url = "/MyAccount/updateAccount";
            const data ={
                name: $('#name').val(), 
                phoneNo: $('#phoneNo').val(), 
                password: $('#password').val()
            };
            $.post(url, data, function(op) {
                window.location.replace('/MyAccount/profileSecurity?success=Information Updated');
            })
        }
    </script>
</div>
<!-- </body> -->

<?php $this->view('shared/footer'); ?>