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
                <div>
                    <label for="code">Enter the code sent: </label><br>
                    <input type="text" name="code" id="code_rec" required><br>
                </div>
                <div>
                    <button id="bnt_rgt"><a href="alterar_senha.php" id="vrf_code">Verify code</a></button><br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>