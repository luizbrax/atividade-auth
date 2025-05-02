<?php
session_start();
if (isset($_GET['Sucesso'])) {
    $_SESSION['msg_sucesso'] = 'Successful Registration!';
    header('Location: ../VIEW/login.php');
};
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
            <div class="cadastro">
                <h1 class="h1">Register</h1>
                <form action="../CONTROLLER/cadastroController.php" method="POST">
                    <div>
                        <label for="name">Choose your name: </label><br>
                        <input type="text" name="name" id="name" required><br>
                    </div>
                    <div>
                        <label for="email">Enter email: </label><br>
                        <input type="email" name="email" id="email" required><br>
                    </div>
                    <div>
                        <label for="password">Enter password: </label><br>
                        <input type="password" name="password" id="pass" minlength="8" required><br>
                    </div>
                    <div>
                        <label for="c_password">Confirm password: </label><br>
                        <input type="password" name="C_password" id="conf" minlength="8" required><br>
                    </div>

                    <div class="botoes">
                        <button class="bnt_rgt" type="submit">Register</button><br>
                    </div>
                </form>
                <div >
                    <a href="login.php">Do you have e-mail?</a>
                </div>

            </div>
        </div>
    </div>
</body>

<script>
    let senha = document.getElementById('pass');
    let C_senha = document.getElementById('conf');

    function passwordValidity() {
        if (senha.value != C_senha.value) {
            C_senha.setCustomValidity("Passwords don't match!")
            C_senha.repotValidity();
            return false;
        } else {
            C_senha.setCustomValidity("");
            return true;
        }

    }

    C_senha.addEventListener('input', passwordValidity)
</script>

</html>