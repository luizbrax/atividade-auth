<?php

require '../service/conexao.php';

function register($name, $email, $password){
    $conn = new usePDO; //obrigatorio
    $instance = $conn->getInstance(); //obrigatorio

    //criptografa a senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO pessoa (nome, email) VALUES (?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$name, $email]);

    $idPessoa = $instance->lastInsertId();
    $sql = "INSERT INTO usuario (nome, senha, id_pessoa) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$name, $hashed_password, $idPessoa]);

    $result = $stmt->rowCount();

    return $result;
}

