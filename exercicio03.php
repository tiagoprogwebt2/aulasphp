<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 03 (corrigido)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
li:nth-child(odd){ /* Ímpar */
    color: red;
}

li:nth-child(even){ /* Par */
    color: blue;
}
</style>

</head>
<body>
    <div class="container">
        <h1>Exercício 03 (corrigido)</h1>
        <hr>
<?php
$meses = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];
?>

<!-- <ol> : LISTA ORDENADA -->
<!-- <li> : ITEM DA LISTA -->

<ol>
<?php foreach($meses as $mes){ ?>
        <li> <?=$mes?> </li>
<?php } ?>
</ol>

    </div>
</body>
</html>