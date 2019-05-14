<?php
App::pageAuth([App::ROLE_USER]);
$users = User::get();

?>
<div class="card card-model card-model-sm">
<div class="card-header">
    Gebruikers
</div><br>
<?php foreach($users as $user){?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            <?= $user->getFullname(); ?>
        </div>
        <div class="card-body">
              Adres: <?= $user->getAdres();?><br>
              Email: <?= $user->getEmail();?>
        </div>
    </div>
</div><br>

<?php } ?>
</div>
