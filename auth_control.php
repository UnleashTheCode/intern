<?php

session_start();

if(isset($_POST['log-btn'])) {
    $pass=$_POST['password'];
     if ($pass == 'Waz&!k#v792RO2psb^Qdw6I8') {
     $_SESSION['logged'] = true;
     header('location: secret_santa.php');
     }
}
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['logged']);
    exit();
}
?>