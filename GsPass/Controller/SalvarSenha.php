<?php
include_once('../Model/ConfigGS.php');
$senha = $_GET['senha'];
$aplicacao = $_GET['aplicacao'];
$data_salva = $_GET['data_salva'];
session_start();
$email = $_SESSION['email'];
SalvaSenha($senha,$aplicacao,$data_salva,$email);
?>