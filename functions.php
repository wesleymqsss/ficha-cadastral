<?php
// calculo salario anual

/**
 * Calcula o salario anual baseado no salario  mensal
 * 
 * @param float $salarioMensal - salario mensal
 * @return float $salarioAnual
 */
function calcularSalarioAnual (float $salarioMensal): string{
    
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    
    return convertNumberToBRL($salarioAnual);
};



// quantos anos faltam para se aposenta

/**
 * Calcula a quantidade de anos que faltam para aposentar
 * 
 * @param int $idade -  Idade
 * @param string $sexo -  Sexo da pessoa
 * @return int - Quantidade de anos que faltam para aposentar
 */
function calculoParaAposentadoria(int $idade, string $sexo){

    $anosParaAposentar = $sexo == "M" ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $anosParaAposentar - $idade;

    //IDADE_APOSENTADORIA_MASCULINA = 65);
    //IDADE_APOSENTADORIA_FEMININA = 60);
};

/**
 *  Recebe um valor numero e retorna um valor monetario
 * 
 * @param float $number -  Valor numerico
 * @return string valor monetario
 */
// transformando numero em valor monetario
function convertNumberToBRL (float $number): string{

    return number_format($number,2, ",",".");

};






?>