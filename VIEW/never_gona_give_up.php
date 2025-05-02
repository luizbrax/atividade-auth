<?php 
session_start();
if (isset($_SESSION['msg_lg_sucesso'])) {
    echo "<script>
        window.onload = function() {
            setTimeout(function() {
                alert('" . $_SESSION['msg_lg_sucesso'] . "');
            }, 100);
        };
    </script>";
    unset($_SESSION['msg_lg_sucesso']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bd_wttm">
    <h1 class="wttm">Welcome to the mato!</h1>
</body>
</html>


