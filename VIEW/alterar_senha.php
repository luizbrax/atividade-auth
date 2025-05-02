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
                <form action="../VIEW/login.php">
                    <div>
                        <label for="nw_pass">New password: </label><br>
                        <input type="text" name="nw_pass" id="nw_pass" required><br>
                    </div>
                    <div>
                        <label for="cnw_pass">Confirm the password: </label><br>
                        <input type="text" name="cnw_pass" id="cnw_pass" required><br>
                    </div>
                    <div class="botoes">
                        <button class="bnt_rgt"><span class="issoai">Verify new password</span></button><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>