<?php
require '../service/conexaoP.php';

function alterarSenhaNoBanco($email, $newPassword)
{
    $conn = new usePDO();
    $instance = $conn->getInstance();
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE usuario u 
            JOIN pessoa p ON u.fk_pessoa = p.id_pessoa
            SET u.senha = ? 
            WHERE p.email = ?";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$hashedPassword, $email]);

    return $stmt->rowCount() > 0; 
}
