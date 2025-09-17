<?php
include_once('../Model/ConfigGS.php');
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $datadenascimento = $_POST['datadenascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    if(VerificarUsuario($email) == 0 ){
        CadastrarUsuario($nome,$datadenascimento,$email,$telefone,$senha);
        header("Location:../View/index.html");
    }else{
        ?>
        <script>
        alert("ESSE EMAIL JÁ EXISTE!");
        window.location = "../View/Cadastro.html";
        </script>
        <?php
    }
}
?>