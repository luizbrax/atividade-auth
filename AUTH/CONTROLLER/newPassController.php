<?php
session_start();
require '../MODEL/newPassModel.php';

if (isset($_POST['alt_pass'])) {
    $newPass = $_POST['nw_pass'];
    $confPass = $_POST['cnw_pass'];

    if ($newPass == $confPass) {
        if (isset($_SESSION['email_for_password_change'])) {
            $email = $_SESSION['email_for_password_change'];
            $result = alterarSenhaNoBanco($email, $newPass);

            if ($result) {
                $_SESSION['changed'] = "Password changed successfully!";
                header("Location: ../VIEW/login.php");
                exit();
            } 
        }
    } else {
        $_SESSION['changed'] = "Passwords do not match!";
        header("Location: ../VIEW/alterar_senha.php");
        exit();
    }
}
