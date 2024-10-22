<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 01 (corrigido)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Exercício 01 (corrigido)</h1>
        <hr>

<?php
    // Array NUMÉRICO/INDEXADO
    $dados1 = [
        "chapolin.colorado", 
        "123teste", 
        30, 
        "São Paulo",
        ["11-2135-0300","11-91234-5678"]
    ];


    // Array ASSOCIATIVO
    $dados2 = [
        "usuario" => "chapolin.colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefones" => ["11-2135-0300", "11-98765-4321"]
    ];
?>

    <h2>Versão de saída usando array NUMÉRICO/INDEXADO</h2>

    <ol>
        <li>Nome: <?=$dados1[0]?> </li>
        <li>Idade: <?=$dados1[2]?> anos </li>
        <li>Cidade: <?=$dados1[3]?></li>
        <li>Celular: <?=$dados1[4][1]?> </li>
    </ol>
    
    <hr>

    <h2>Versão de saída usando array ASSOCIATIVO</h2>

    <ol>
        <li>Nome: <?=$dados2["usuario"]?></li>
        <li>Idade: <?=$dados2["idade"]?> anos</li>
        <li>Cidade: <?=$dados2["cidade"]?></li>
        <li>Celular: <?=$dados2["telefones"][1]?></li>
    </ol>

    </div>
</body>
</html>