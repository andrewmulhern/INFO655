<?php

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
    'appId'  => '223093184459540',
    'secret' => '7676231dddc69e4fb46b964e24d5158a',
));


session_start();
session_destroy();

header('Location: login.php');

?>