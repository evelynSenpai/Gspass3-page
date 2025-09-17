<?php
session_start();
include_once('../Model/ConfigGS.php');
$email = $_SESSION['email'];
VerPerfil($email);
?>