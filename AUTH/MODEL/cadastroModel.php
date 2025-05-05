<?php

require '../service/conexao.php';

function register($name, $email, $password)
{
    $conn = new usePDO; //obrigatorio
    $instance = $conn->getInstance(); //obrigatorio

    $checarSql = "SELECT id_pessoa FROM pessoa WHERE email = ?";
    $checarStmt = $instance->prepare($checarSql);
    $checarStmt->execute([$email]);
    $resultado = $checarStmt->fetch();

    session_start();
    if ($resultado) {
        $_SESSION['erro'] = "Email already registered!";
        header("Location: ../VIEW/index.php");
        exit();
    }

    //criptografa a senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO pessoa (nome, email) VALUES (?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$name, $email]);

    $idPessoa = $instance->lastInsertId();
    $sql = "INSERT INTO usuario (nome, senha, fk_pessoa) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$name, $hashed_password, $idPessoa]);

    $result = $stmt->rowCount();

    return $result;
}
