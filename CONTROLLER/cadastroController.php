<?php

require '../MODEL/cadastroModel.php';
if ($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $C_password = $_POST['C_password'];

    $result = register($name, $email, $password);

    if ($result) {
        header("location: ../VIEW/index.php?Sucesso=1");
    } else {
        echo  "<script>alert('Unsuccessful Registration!');</script>";;
    }
}
