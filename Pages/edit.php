<?php
App::pageAuth(['user'], "login");
if (isset($_POST['email'])) {
    User::updateUser($_POST);
}
?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Wijzigen
        </div>
        <div class="card-body">
            <p><?= User::editUserForm(); ?><input type="button" value="Terug" class="btn" onclick="window.location.href='http://localhost/sjon-framework-master/public/?page=account'"/></p>
        </div>
    </div>
</div>
