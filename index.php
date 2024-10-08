<?php
    require "constantes.php";
    require "data.php";
    require "functions.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <div class="card">
        <h1>Ficha Cadastral</h1>
        <p>Nome:
        <strong>
            <?= $nome; ?>
        </strong></p>
        <p>Idade:
        <strong>
            <?= $idade; ?>
        </strong></p>
        <p>Sexo: 
        <strong>
            <?= $sexo; ?>
        </strong></p>
        <p>Salário Mensal: 
        <strong>R$
            <?=convertNumberToBRL($salarioMensal);?>
        </strong></p>
        <p>Salário Anual: 
        <strong>R$
            <?=calcularSalarioAnual($salarioMensal);?>
        </strong></p>
        <p>Status de Emprego: 
        <strong>
            <?=$situacaoEmprego?>
        </strong></p>
        <p>Anos para Aaposentadoria: 
        <strong>
            <?= calculoParaAposentadoria($idade, $sexo);?>    
        </strong></p>
        <p>Habilidades: <strong>
            <?php
                echo implode(', ', $habilidade);
            ?>
        </strong></p>
    </div>
</div>
</body>
</html>