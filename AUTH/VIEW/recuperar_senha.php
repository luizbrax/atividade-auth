<?php
session_start();

function gerarCod($tamanho = 8)
{
    $characteres = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$#!&";
    $cod = "";
    for ($i = 0; $i < $tamanho; $i++) {
        $rand = rand(0, strlen($characteres) - 1);
        $cod .= $characteres[$rand];
    }
    return $cod;
}

if (isset($_POST['generate_code'])) {
    $_SESSION['cod_gen'] = gerarCod();
    $_SESSION['verify'] = 'The generated code is: ' . $_SESSION['cod_gen'];
    header("Location: recuperar_senha.php");
    exit();
}

if (isset($_POST['verify_code'])) {
    if (isset($_SESSION['cod_gen'])) {
        $cod_gen2 = $_POST['code'];
        if ($cod_gen2 == $_SESSION['cod_gen']) {
            header("Location: ../VIEW/alterar_senha.php");
            exit();
        } else {
            $_SESSION['verify'] = "Invalid code";
            header("Location: recuperar_senha.php");
            exit();
        }
    }
}

if (isset($_SESSION['verify'])) {
    echo "<script>
        window.onload = function() {
            setTimeout(function() {
                alert('" . $_SESSION['verify'] . "');
            }, 200);
        };
    </script>";
    unset($_SESSION['verify']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AUTH</title>
</head>
<body>
    <div class="body">
        <div class="box_rgt">
            <div class="rec_cadastro">
                <h1 class="h1_rec">Password Recovery</h1>
                <form method="POST">
                    <div>
                        <label for="code">Enter the code sent: </label><br>
                        <input type="text" name="code" id="code_rec" required><br>
                    </div>
                    <div class="botoes">
                        <button type="submit" name="verify_code" class="bnt_rgt">Verify code</button><br>
                    </div>
                </form>
                <form method="POST">
                    <div class="botoes">
                        <button class="bnt_rgt" type="submit" name="generate_code">Generate code</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
