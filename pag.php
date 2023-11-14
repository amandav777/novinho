<?php

    session_start();
    // print_r($_SESSION);
    
    if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Seja bem vindo, $logado !</h1>"
    ?>
    <a href="sair.php">sair</a>
</body>
</html>