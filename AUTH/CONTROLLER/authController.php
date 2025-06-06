<?php
session_start();
require '../MODEL/authModel.php';

if ($_POST) {
    $email = $_POST['l_email'];
    $password = $_POST['l_password'];

    $loginResult = validarLogin($email, $password);

    if ($loginResult) {
        $_SESSION['msg_lg_sucesso'] = "Login successful!";
        header("Location: ../VIEW/never_gona_give_up.php");
        exit();
    } else {
        $_SESSION['msg_lg_erro'] = "Login failed! Please check your credentials.";
        header("Location: ../VIEW/login.php");
        exit();
    }
}
