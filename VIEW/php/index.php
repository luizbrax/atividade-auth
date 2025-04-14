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
                <h1 class="h1">Register</h1>
                <form action="../CONTROLLER/CadastroController.php" id="register">
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
                        <input type="password" name="password" id="pass" required><br>
                    </div>
                    <div>
                        <label for="c_password">Confirm password: </label><br>
                        <input type="password" name="C_password" id="conf" required><br>
                    </div>
                    <div>
                        <button id="bnt_rgt"><a href="login.php" id="rgt">Register</a></button><br>
                    </div>
                    <div>
                        <a href=""></a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>