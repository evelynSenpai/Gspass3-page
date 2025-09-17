<?php
session_start();
include_once('../Model/ConfigGS.php');
$nome = $_POST['nome'];
$datadenascimento = $_POST['datadenascimento'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$email = $_SESSION['email'];
EditarDadosPerfil($nome,$datadenascimento,$email,$telefone,$senha);
header("Location:../View/Perfil.html");
?>