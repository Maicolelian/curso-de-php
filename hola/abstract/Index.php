<?php

require_once("Base.php");
require_once("Admin.php");
require_once("Guest.php");
require_once("User.php");



$guest = new Guest();
echo $guest->login() . "<br>";

$user = new User('Mai');
echo $user->login() . "<br>";

$admin = new Admin('Elian');
echo $admin->login() . "<br>";