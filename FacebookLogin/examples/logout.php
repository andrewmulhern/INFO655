<?php

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
    'appId'  => '223093184459540',
    'secret' => '',
));


session_start();
session_destroy();

header('Location: login.php');

?>