<?php

$conexao = new mysqli('localhost','root','123456','gspass');
function CadastrarUsuario($nome,$datadenascimento,$email,$telefone,$senha){
    $result = mysqli_query($GLOBALS['conexao'],
    "INSERT INTO cadastro_usuario(nome_completo,data_de_nascimento,email,telefone,senha)
    VALUES ('$nome','$datadenascimento','$email','$telefone',md5('$senha'))");
}
function VerificarUsuario($email){
    $verificar = $GLOBALS['conexao']->query("SELECT * FROM cadastro_usuario WHERE email='$email'");
    $VU = mysqli_num_rows($verificar);
    return $VU;
}
function Logar($email,$senha){
    $sql = "SELECT * FROM cadastro_usuario WHERE  email = '$email' AND senha = md5('$senha')";
    $result = $GLOBALS['conexao'] -> query($sql);
    $L = mysqli_num_rows($result);
    return $L;
}
function SalvaSenha($senha,$aplicacao,$data_salva,$email){
    $sql = "INSERT INTO minhas_senhas(senha,aplicacao,data_salva,email) VALUE ($senha,'$aplicacao','$data_salva','$email')";
    $result = $GLOBALS['conexao'] -> query($sql);
}
function VerSenhas($email){
    $result = mysqli_query($GLOBALS['conexao'],"SELECT id_senha,senha,aplicacao,data_salva FROM minhas_senhas WHERE email='$email'");
    for ($i=0; $i < mysqli_num_rows($result); $i++) { 
        $resposta = mysqli_fetch_array($result); 
        print "<tr>"."<td>".$resposta['id_senha']."</td>"."<td>".$resposta['senha']."</td>"."<td>".$resposta['aplicacao']."</td>"."<td>".$resposta['data_salva']."</td>"."</tr>";
    }
}
function ApagaSenha($senha){
    $sql = "delete from minhas_senhas where id_senha = ".$senha;
    $result = $GLOBALS['conexao'] -> query($sql);
}
function VerPerfil($email){
    $result = mysqli_query($GLOBALS['conexao'],"SELECT nome_completo,data_de_nascimento,telefone,email,senha FROM cadastro_usuario WHERE email='$email'");
    $senhaCount ='';
    for($i =0;$i < strlen($_SESSION['senha']);$i++){
        $senhaCount = $senhaCount ."*";
    }
    for ($i=0; $i < mysqli_num_rows($result); $i++) { 
        $resposta = mysqli_fetch_array($result);
        print("<tr>"."<th> Nome: ".$resposta['nome_completo']."</th>"."</tr>".
        "<tr>"."<th> Data de nascimento: ".$resposta['data_de_nascimento']."</th>"."</tr>".
        "<tr>"."<th> Email: ".$resposta['email']."</th>"."</tr>".
        "<tr>"."<th> Telefone: ".$resposta['telefone']."</th>"."</tr>".
        "<tr>"."<th> Senha: ".$senhaCount."</th>"."</tr>");
    }
}
function ApagaPerfil($email){
    $sql = "delete from cadastro_usuario where email =  '$email'";
    $result = $GLOBALS['conexao'] -> query($sql);
}
function EditarDadosPerfil($nome,$datadenascimento,$email,$telefone,$senha){
    $result = mysqli_query($GLOBALS['conexao'],"UPDATE cadastro_usuario SET nome_completo='$nome', data_de_nascimento='$datadenascimento', telefone='$telefone', senha='$senha' WHERE email='$email'");
}
?>