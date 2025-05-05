<?php

require '../service/conexaoP.php';

function validarLogin($email, $password)
{
    $conn = new usePDO();
    $instance = $conn->getInstance();

    $sql = "SELECT u.senha FROM usuario u 
    JOIN pessoa p ON u.fk_pessoa = p.id_pessoa
    WHERE p.email = ?";

    $stmt = $instance->prepare($sql);
    $stmt->execute([$email]);


    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $hashedPassword = $row['senha'];

        if (password_verify($password, $hashedPassword)) {
            return true;
        }
    }

    return false;
}
