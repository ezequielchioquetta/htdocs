<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da execução</title>
</head>
<body>

<?php
// Função para calcular a soma dos números de 1 até o valor fornecido
function calcularSoma($numero)
{
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }

    return $soma;
}

// Função para calcular o fatorial de um número
function calcularFatorial($numero)
{
    $fatorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    return $fatorial;
}

// Função para calcular a média dos números de 1 até o valor fornecido
function calcularMedia($numero)
{
    $soma = calcularSoma($numero);
    $media = $soma / $numero;

    return $media;
}

// Função para calcular a soma das frações 1/1 + 1/2 + 1/3 + ... + 1/valor
function calcularSomaFracao($numero)
{
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += 1 / $i;
    }

    return $soma;
}
$soma=0;
$numero=0;
$fatorial=0;
$somaFracao=0;

    if (isset($_GET["numero"])) {
        $numero = $_get ["numero"];
       
    }

// Calcular a soma
$soma = calcularSoma($numero);

// Calcular o fatorial
$fatorial = calcularFatorial($numero);

// Calcular a média
$media = calcularMedia($numero);

// Calcular a soma das frações
$somaFracao = calcularSomaFracao($numero);

// Exibir os resultados
echo "A soma dos números de 1 até $numero é: $soma\n";
echo "O fatorial de $numero é: $fatorial\n";
echo "A média dos números de 1 até $numero é: $media\n";
echo "A soma das frações 1/1 + 1/2 + 1/3 + ... + 1/$numero é: $somaFracao\n";
?>   
<div>
    <form id="form" action="">
    <p>valor Inicial</p>
    <input type="text" name="numero"></br>
    
    <input type="Submit" value="executar loop">
</form>
 </div>    
<section>


</body>
</html>