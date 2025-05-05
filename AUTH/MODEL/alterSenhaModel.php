<?php

require '../service/conexao.php';

function verifyEmail($email)
{
    $conn = new usePDO();
    $instance = $conn->getInstance();

    $sql = "SELECT id_pessoa FROM pessoa WHERE email = ?";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$email]);

    return $stmt->rowCount() > 0;

    
}
