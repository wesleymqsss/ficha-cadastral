<?php
 $nome = "Wesley Marques";
    $idade = 25;
    $sexo = "M";
    $salarioMensal = 2210.30;
    $estaEmpregado = false;
    $habilidade = ["PHP", "Javascript", "HTML", "CSS"];

    //ternario:
    // varialvel =  condicao ? valor_se_atender_condicao : valor_se_NAO_atender_condicao.
    
    $situacaoEmprego = $estaEmpregado == true ? "Empregado" : "Desempregado";
    
    $anosParaAposentar = $sexo == "M" ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    
?>