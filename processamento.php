<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <h1>Processamento dos dados vindos
    do formulário HTML</h1>
    <hr>

<?php
/* Capturando os dados através do array $_POST e guardando CADA UM em uma variável. */
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];

/* Se um dos campos obrigatórios estiver vazio */
if( empty($nome) || empty($email) ){
?>
    <!-- Mostramos um alerta para o usuário -->
    <p style="color: red;">
        Você DEVE preencher <b>nome</b> e <b>e-mail</b>!
    </p>
<?php
} else {
?>
    <h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        
        <!-- Verificando se os campos
         nascimento e mensagem NÃO ESTÃO VAZIOS.
         Note o uso do operador ! para inverter
         a lógica da função empty() -->

        <?php if( !empty($nascimento) ){ ?>
        <li>Data de nascimento: <?=$nascimento?></li>
        <?php } ?>
        
        <?php if( !empty($mensagem) ){ ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php } ?>
    </ul>

<?php } ?>


</body>
</html>