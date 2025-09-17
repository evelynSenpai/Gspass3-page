<?php

if (isset($_POST['tamanho'])) {
    $tamanho = intval($_POST['tamanho']);
    $minusculas = isset($_POST['minusculas']) == 1;
    $maiusculas = isset($_POST['maiusculas']) == 1;
    $simbolos = isset($_POST['simbolos']) == 1;
    $numeros = isset($_POST['numeros']) == 1; 


    $minusculas_cars = "abcdefghijklmnopqrstuvwxyz";
    $maiusculas_cars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $simbolos_cars = "!@#$%^&*()_+-=[]{}|;:',.<>?/`~";
    $numeros_cars = "0123456789";

    $senha = "";
    $validar_op = "";

    if ($minusculas) {
        $validar_op .= $minusculas_cars;
    }
    if ($maiusculas) {
        $validar_op .= $maiusculas_cars;
    }
    if ($simbolos) {
        $validar_op .= $simbolos_cars;
    }
    if ($numeros) {
        $validar_op .= $numeros_cars;
    }

    for ($k=0; $k < $tamanho; $k++) { 
        $numero_aleatorio = rand(0, strlen($validar_op) - 1 );
        $senha .= $validar_op[$numero_aleatorio];
    }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Senha</title>
</head>
<body>
<style>
    body{
        background-color: #57449a;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container{
        background: #ff0000;
        height: 800vh;
    }
    .elemento{
        background: #1f252f;
        color: #ffffff;
    }
    main{
        text-align: center;
        font-size: 10em;
    }
    h2{
        color: #EEE;
        text-align: center;
    }
    form{
        color: #1f252f;
        text-align: center;
        font-size: 2em;
    }
    h1{
        color: white;
        text-align: center;
        font-size: 5em;
    }
    h4{
        color: #EEE;
        text-align: center;
        font-size: 2em;
        top: 55%;
        left: 50%;
        transform: translateY(+816%) translateX(0%);
    }
    h5{
        color: #EEE;
        text-align: center;
        font-size: 2em;
        top: 55%;
        left: 50%;
        transform: translateY(+694%) translateX(0%);
    }
    .bnt2{
        box-shadow: 2px 2px 2px #000000;
        text-decoration: none;
        font-family: 'Times New Roman';
        color: #EEE;
        background-color:#1f252f;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 50px;
        text-align: center;
        cursor: pointer;
        transition: background 1s;
        font-size: 20px;
        padding: 4px 9px;
        width: 150px;
        position: absolute;
        top: 95%;
        left: 50%;
        transform: translateY(-20%) translateX(-50%);
    }
    .bnt2:hover{
        background: #000000;
    }
    .btn3{
        font-size: 90px;
        height: 120px;
        width: 120px;
        color:rgb(255, 255, 255);
        border: 1px solid rgb(0, 0, 0);
        border-radius: 100px;
        cursor: pointer;
        transition: background 1s;
        position: absolute;
        transform: translateY(+1%) translateX(+1300%);
    }
    .btn3:hover{
        background: rgb(0, 0, 0);
    }
    form{
        background-color:  #1f252f;
        color: #f5f5f5;
        text-align: center;
        font-size: 2em;
        position: absolute;
        padding: 40px 70px;
        border: 1px solid rgb(0, 0, 0);
        top: 40%;
        left: 50%;
        height: 180px;
        width: 450px;
        border-radius: 50px;
        transform: translateY(-40%) translateX(-50%);
        font-family: 'Times New Roman';
    }
    button{
        box-shadow: 2px 2px 2px #000000;
        text-decoration: none;
        font-family: 'Times New Roman';
        color: #EEE;
        background-color:#1f252f;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 50px;
        text-align: center;
        cursor: pointer;
        transition: background 1s;
        font-size: 20px;
        padding: 4px 9px;
        width: 150px;
        position: fixed;
        top: 95%;
        left: 50%;
        transform: translateY(+50%) translateX(-50%);
    }
    button:hover{
        background: #000000;
    }
    #salvarSenha{
        box-shadow: 2px 2px 2px #000000;
        text-decoration: none;
        font-family: 'Times New Roman';
        color: #EEE;
        background-color:#1f252f;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 50px;
        text-align: center;
        cursor: pointer;
        transition: background 1s;
        font-size: 20px;
        padding: 4px 9px;
        width: 150px;
        position: fixed;
        top: 122%;
        left: 50%;
        transform: translateY(-1000%) translateX(-50%);
    }
    #salvarSenha:hover{
        background: #000000;
    }
    #novaSenha{
        color: #000000;
        font-size: 1.5em;
        top: 55%;
        left: 50%;
        transform: translateY(+801%) translateX(+265%);                                                                                       
    }
    #aplicacao{
        color: #000000;
        font-size: 1.5em;
        transform: translateY(+700%) translateX(+200%);                                                                                       
    }
    #data_salva{
        color: #000000;
        font-size: 1.5em;
        top: 55%;
        left: 50%;
        transform: translateY(+830%) translateX(+450%); 
    }
</style>
<body>
    <a class = "btn3" href = "Perfil.html">
        <img src="../Imagens/ícone.png" style="height: 250px; width: 250px; position: center;">
    </a>
    <main>
        <div class = "conteiner">
            <div class = "elemento">
                <i>Criar Nova Senha</i>
            </div>
        </div>
    </main>
    <h2>Gerador de Senha</h2>
    <form method="POST" action="">               
        <label for="tamanho">Tamanho da senha</label>
        <input type="number" required min="9" value="16" name="tamanho">
        <br>
        <label for="">Incluir letras minúsculas</label>
        <input type="checkbox" value="1" checked name="minusculas">
        <br>
        <label for="">Incluir letras maiúsculas</label>
        <input type="checkbox" value="1" checked name="maiusculas">
        <br>
        <label for="">Incluir símbolos</label>
        <input type="checkbox" value="1" checked name="simbolos">
        <br>
        <label for="">Incluir números</label>
        <input type="checkbox" value="1" checked name="numeros">       
        <button>Gerar!</button>
    </form>
    <?php if (isset($senha)) { ?>
    <h4>Senha gerada</h4>
    <input id="novaSenha" type="text" readonly value="<?php echo $senha; ?>">
    <button id="salvarSenha" name="salvarSenha" type="submit" onclick=salvar()>Salvar Senha</button>
    <h5>Aplicação e Data Salva</h5>
    <input id="aplicacao" name="aplicacao" type="text" require />
    <input id="data_salva" name="data_salva" type="date" require />
    <?php } ?>
    <a class = "bnt2" href = "MinhasSenhas.html">Voltar</div>
    <script>
        function salvar() {
            let aplicacao = document.getElementById('aplicacao').value;
            let data_salva = document.getElementById('data_salva').value;
            if(!senha && !aplicacao && !data_salva){
                alert("NÃO É POSSIVEL SALVAR A SENHA, PREENCHA TODOS OS CAMPOS!")
            }else{
                var senha = <?php echo json_encode($senha); ?>;
                let xhttp = new XMLHttpRequest
                xhttp.onload = function () {
                    window.location = "MinhasSenhas.html";
                }
                xhttp.open('GET','../Controller/SalvarSenha.php?senha='+senha+'&aplicacao='+aplicacao+'&data_salva='+data_salva);
                xhttp.send();
            }
        }
    </script>
</body>
</html>
</body>
</html>