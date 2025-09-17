<?php
session_start();
include_once('../Model/ConfigGS.php');
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if(Logar($email,$senha) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "<script>
        alert('SENHA OU EMAIL INCORRETOS');
        window.location = '../View/index.html'
        </script>";
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../View/MinhasSenhas.html');
    }
}else{
    header('Location: ../View/index.html');
}
?>