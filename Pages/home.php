<?php

App::pageAuth(['user'], "login");

// Example to get user
$user = User::findById(1);


// same as above, but different and as array
$user = DB::getInstance()->prepare('SELECT * FROM users WHERE id = :id');
$user->execute(['id' => 1]);
$user = $user->fetchAll(PDO::FETCH_CLASS, 'User');

dd($user[0]);


// same as above, but different not as array
$user = DB::getInstance()->prepare('SELECT * FROM users WHERE id = :id');
$user->execute(['id' => 1]);
$user->setFetchMode(PDO::FETCH_CLASS, 'User');
$user = $user->fetch();

dd($user);

?>

