<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Comandos condicionais no PHP</h1>
    <hr>

    <h2>Condicional SIMPLES</h2>
<?php
$numero = 500;
if($numero >= 100) {
    echo "<p>O valor da variável é $numero</p>";
}
?>

    <hr>

    <h2>Condicional COMPOSTA</h2>
<?php
/* Controle de Estoque */  
$produto = "Video Game";
$qtdEmEstoque = 0; // o que temos no momento
$qtdCritica = 2; // mínimo necessário
?>
    <h3>Produto: <?=$produto?></h3>
    <p><b>Estoque:</b> <?=$qtdEmEstoque?></p>
<?php
/* Se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir pra repor. */
if($qtdEmEstoque < $qtdCritica){
    echo "<p style='color:red'>
            É necessário repor!</p>";
} else {
    /* Caso contrário, simplesmente avisar que
    o estoque está normal. */
    echo "<p style='color:blue'>
            Estoque normal.</p>";
}
?>
    <hr>

    <h2>Condicional ENCADEADA</h2>
<?php
/* Verificando o produto e determinando
diferentes períodos de garantia (em anos). */
if($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
} else {
    $garantia = 1;
}
?>
<p><?=$produto?> tem garantia de <b><?=$garantia?> anos</b></p>

    <hr>

    <h2>Condicional ENCADEADA usando switch/case</h2>

<?php
    switch($produto){
        case "Ultrabook": $garantiaB = 5; break;
        case "Geladeira": $garantiaB = 3; break;
        case "TV": $garantiaB = 2; break;
        default: $garantiaB = 1; break;
    }
?>
<p>Garantia de <?=$garantiaB?> anos.</p>

    <?php include "redes-sociais.html" ?>

</div>

</body>
</html>