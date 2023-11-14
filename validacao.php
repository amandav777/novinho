<?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['email'])) {
    include_once("config.php");
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
    $sql_exec = $conexao->query($sql) or die($mysqli->error);

    $usuario = $sql_exec->fetch_assoc();
    if(password_verify($senha, $usuario['senha'])){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: pag.php');
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

} else {
    header('Location: login.php');
}

?>