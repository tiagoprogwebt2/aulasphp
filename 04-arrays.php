<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Arrays no PHP</h1>
        <hr>
<?php
// Array numérico/indexado
$bandas = ["Slayer", "Nightwish", "Pink Floyd", "Savatage"];
$cursos = array("Node.js", "Design", "Nutrição");
?>
        <h2>Acessando os dados do array</h2>
        <p>Rock Progressivo: <?=$bandas[2]?> </p>
        <p>Ontem estivemos com a turma de <?=$cursos[2]?></p>
    </div>
</body>
</html>