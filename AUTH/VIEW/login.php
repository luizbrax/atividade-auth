<?php
session_start();
if (isset($_SESSION['msg_sucesso'])) {
    echo "<script>
        window.onload = function() {
            setTimeout (function() {
                alert('" . $_SESSION['msg_sucesso'] . "');
            }, 200);
        };
    </script>";
    unset($_SESSION['msg_sucesso']);
}

if (isset($_SESSION['msg_lg_erro'])) {
    echo "<script>
        window.onload = function() {
            setTimeout(function() {
                alert('" . $_SESSION['msg_lg_erro'] . "');
            }, 200);
        };
    </script>";
    unset($_SESSION['msg_lg_erro']);
}

    if (isset($_SESSION['changed'])) {
        echo "<script>
            window.onload = function() {
                setTimeout (function() {
                    alert('" . $_SESSION['changed'] . "');
                }, 200);
            };
        </script>";
        unset($_SESSION['changed']);
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
            <div class="cadastro">
                <h1 class="h1_log">Login</h1>
                <form action="../CONTROLLER/authController.php" method="POST">
                    <div>
                        <label for="email">Enter your email: </label><br>
                        <input type="email" name="l_email" id="email" required><br>
                    </div>
                    <div>
                        <label for="password">Enter your password: </label><br>
                        <input type="password" name="l_password" id="pass" minlength="8" required><br>
                    </div>

                    <div>
                        <a href="verificar_email.php" target="_blank">Are you forgot your password?</a>
                    </div>

                    <div class="botoes">
                        <button class="bnt_rgt" type="submit">Login</button><br>
                    </div>
                </form>
                

            </div>
        </div>
    </div>
</body>

</html>