<?php
session_start();
require '../MODEL/alterSenhaModel.php';

if (isset($_POST['Eemail'])) {
    $email = $_POST['Eemail'];

    $alterSenha = verifyEmail($email);

    if ($alterSenha) {
        $_SESSION['email_for_password_change'] = $email;
        $_SESSION['verify'] = "Email verified. Now put the code generated.";
        header("Location: ../VIEW/recuperar_senha.php");
        exit();
    } else {
        $_SESSION['verify'] = "Unable to verify email. Please try again.";
        header("Location: ../VIEW/verificar_email.php");
        exit();
    }
}
