<?php

session_start();    
require '../MODEL/authModel.php';

if ($_POST) {
    $name = $_POST['l_name'];
    $email = $_POST['l_email'];
    $password = $_POST['l_password'];

    $loginResult = validarLogin($name, $email, $password);

    if ($loginResult) {
        $_SESSION['msg_lg_sucesso'] = "Login successful!";
        header("Location: ../VIEW/never_gona_give_up.php");
        exit(); 
    } else {
        echo "<script>alert('Login failed! Please check your credentials.'); window.history.back();</script>";
    }
}
