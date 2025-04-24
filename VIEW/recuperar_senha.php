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
            <div class="rec_cadastro">
                <h1 class="h1_rec">Password Recovery</h1>
                <form action="../VIEW/alterar_senha.php">
                    <div>
                        <label for="code">Enter the code sent: </label><br>
                        <input type="text" name="code" id="code_rec" required><br>
                    </div>
                    <div class="botoes">
                        <button class="bnt_rgt">Verify code</button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>