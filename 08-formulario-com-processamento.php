<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário COM PHP</title>
</head>
<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>

<?php
/* Se o botão continuar foi acionado */
if( isset($_POST['continuar']) ){
    // Pegamos o nome digitado
    $nome = $_POST['nome'];
?>
    <h2>Bem-vindo(a) <?=$nome?> 😊</h2>
<?php
} else {
    include "formulario-boas-vindas.html";
}
?>

</body>
</html>