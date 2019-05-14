<?php
App::pageAuth([App::ROLE_USER]);
$user = App::getUser();

$id = $user->id;
?>
<table style="margin-top:50px;margin-left:50px;width:500px;">
  <tr>
    <td>
      <p style="font-size:30px;"><?= $user->getFullname(); ?></p>
      <hr>
      ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $id;?>
      <hr>
      Voornaam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $user->firstname; ?> </br>
      <hr>
      Achternaam &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $user->lastname; ?> </br>
      <hr>
      Emailadres &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $user->email; ?> </br>
      <hr>
      Adres &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $user->adres; ?> </br>
    </td>
  </tr>
  <tr>
    <td>
      <br>
      <input type="button" value="Delete" class="btn btn-danger" onclick="window.location.href='http://localhost/sjon-framework-master/public/?page=account&del=<?= $user->getId();?>'"/>
      <input type="button" value="Edit" class="btn btn-primary" onclick="window.location.href='http://localhost/sjon-framework-master/public/?page=edit'" />
      <?php
        if(isset($_GET['del'])){
        User::destroy($_GET['del']);
      }
      ?>
    </td>
  </tr>
</table>
