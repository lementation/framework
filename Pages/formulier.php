<?php
App::pageAuth([App::ROLE_USER]);

$questions = Vraag::get();

?>
<div class="container">
    <div class="card card-model card-model-sm">
        <div class="card-header">
            Formulier
        </div>
        <div class="card-body">
          <form>
            <?php foreach($questions as $question){ ?>
                <div class="card-header">
                    <?= $question->getVraag(); ?>
                    <input type="text" style="float:right;"></input><br>
                </div>
            <?php } ?>
            <br>
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </div>
    </div>
</div>
