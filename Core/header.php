<?php
//Create your menu here
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Stage</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php if(App::checkAuth(App::ROLE_USER)){ ?>
            <a class="p-2 text-dark" <?= App::link('home') ?>>Home</a>
            <a class="p-2 text-dark" <?= App::link('account') ?>>Account</a>
            <a class="p-2 text-dark" <?= App::link('users') ?>>Gebruikers</a>
            <a class="p-2 text-dark" <?= App::link('add-vraag') ?>>Formulier beheren</a>
            <a class="p-2 text-dark" <?= App::link('formulier') ?>>Formulier</a>
        <?php } ?>

        <?php if(App::checkAuth(App::ROLE_GUEST)){?>
            <a class="p-2 text-dark" <?= App::link('login') ?>>Login</a>
            <a class="p-2 text-dark" <?= App::link('register') ?>>Register</a>
        <?php } else { ?>
            <a class="p-2 text-dark" <?= App::link('logout') ?>>Logout</a>
        <?php } ?>
    </nav>
    <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
</div>
