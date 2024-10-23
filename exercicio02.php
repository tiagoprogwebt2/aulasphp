<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 02 (corrigido)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Exercício 02 (corrigido)</h1>
        <hr>
<?php
// Entrada de dados, informação do salário atual
$salario = 2358.94;

// Análise das condições, e processamentos/cálculos
if( $salario < 500 ) { 
    $novoSalario = $salario * 1.15; // 15%
} elseif( $salario <= 1000 ){
    $novoSalario = $salario * 1.10; // 10%
} else {
    $novoSalario = $salario * 1.05; // 5%
}
?>
        <!-- Saída de dados -->
        <p>Salário antigo: <?=$salario?> </p>
        <p>Salário reajustado: <?=$novoSalario?></p>

        <hr>

        <p>Salário antigo: R$
        <?=number_format($salario, 2, ",", ".")?>
        </p>
        
        <p>Novo salário (reajustado): R$
        <?=number_format($novoSalario, 2, ",", ".")?>
        </p>
    </div>
</body>
</html>