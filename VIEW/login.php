<?php
session_start();
if (isset($_SESSION['msg_sucesso'])) {
    echo "<script>
        window.onload = function() {
            setTimeout (function() {
                alert('" . $_SESSION['msg_sucesso'] . "');
            }, 100);s
        };
    </script>";
    unset($_SESSION['msg_sucesso']);
}   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AUTH</title>
</head>

<body>
    <div class="body">
        <div class="box_rgt">
            <div class="cadastro">
                <h1 class="h1_log">Login</h1>

                <div>
                    <label for="name">Enter the chosen name: </label><br>
                    <input type="text" name="lname" id="name" required><br>
                </div>
                <div>
                    <label for="email">Enter your email: </label><br>
                    <input type="email" name="lemail" id="email" required><br>
                </div>
                <div>
                    <label for="password">Enter your password: </label><br>
                    <input type="password" name="lpassword" id="pass" required><br>
                </div>

                <div>
                    <a href="verificar_email.php" target="_blank">Are you forgot your password?</a>
                </div>

                <div>
                    <button class="bnt_rgt" type="submit">Login</button><br>
                </div>

            </div>
        </div>
    </div>
</body>

</html>