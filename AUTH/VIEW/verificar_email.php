<?php
session_start();
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
                <form action="../CONTROLLER/alterSenhaController.php" method="POST">
                    <div>
                        <label for="email">Choose the email: </label><br>
                        <input type="email" name="Eemail" id="email_rec" required><br>
                    </div>
                    <div class="botoes">
                        <button class="bnt_rgt" type="submit">Verify email</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>