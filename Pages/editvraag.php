<?php
App::pageAuth(['user'], "login");

if (isset($_POST['vraag'])) {
    Vraag::updateVraag($_POST);
}

$vraag = Vraag::findById($_GET['id']);
?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Wijzigen
        </div>
        <div class="card-body">
            <p>
              <?= Vraag::editVraagForm($vraag); ?>
              <input type="button" value="Terug" class="btn" onclick="window.location.href='http://localhost/sjon-framework-master/public/?page=account'"/>
            </p>
        </div>
    </div>
</div>
