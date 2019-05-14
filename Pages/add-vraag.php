<?php

App::pageAuth([App::ROLE_USER]);

if (isset($_POST['vraag'])) {
    $vraag = Vraag::registerr($_POST);
}

$questions = Vraag::get();
?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Vraag toevoegen
        </div>
        <div class="card-body">
            <?= Vraag::registerrForm(); ?>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Formulier
        </div>
        <div class="card-body">
            <?php foreach(array_reverse($questions) as $question){ ?>
                <div class="card-header">
                    ID: <?= $question->getId();?> - <?= $question->getVraag(); ?>
                    <a class="btn btn-danger" href="http://localhost/sjon-framework-master/public/?page=add-vraag&del=<?= $question->getId();?>"/>Delete</a>
                      <a class="btn btn-primary" href="http://localhost/sjon-framework-master/public/?page=editvraag&id=<?= $question->getId()?>"/>Edit</a><br>
                </div>
            <?php } ?>
            <?php
              if(isset($_GET['del'])){
              Vraag::destroy($_GET['del']);

              App::redirect('add-vraag');
            }//elseif(isset($_GET['edit'])){
              //Vraag::editVraagForm();

            //}
            ?>
        </div>
    </div>
</div>
</br>
