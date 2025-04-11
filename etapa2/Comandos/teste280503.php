<?php
//(1) Função para calcular o fatorial de um número
function calcularFatorial($numero) {
    $fatorial = 1;
    
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    return $fatorial;
}
// (2)Função para calcular a soma dos números de 1 até o valor fornecido

function somanumero($numero) {
    

    $somanumero = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $somanumero += $i;
    
    }
    return $somanumero;
}
// (3) Função para calcular a média dos números de 1 até o valor fornecido


function media($numero)
{
    $somanumero = somanumero($numero);
    $media = $somanumero / $numero-0.5;

    return $media;}
// (4) Função para calcular FRACAO
function Fracao($numero)
{
    $fracao = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $fracao += 1 / $i;
    }

    return $fracao;

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando for</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <form id="for" action="teste280503.php">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"></br>
    <select name="missao">
					<option value="Fatorial">Calcular Fatorial</option>
					<option value="somanumero"> A Soman dos Nun</option>
					<option value="media"> Calculo de Média</option>
                    <option value="fracoes"> Calculo de Frações</option>
				</select>
    <input type="Submit" name="btr" value="executar">
</form>
 </div>    
<section>
<?php 
    if(isset($_GET["numero"])){
        $numero=$_GET["numero"];
    }
    
    $resultado = calcularFatorial($numero);

    if ($numero < 0 || !is_numeric($numero) || $numero != intval($numero)) {
        echo "Número inválido. Por favor, digite um número inteiro positivo.";
        exit; 
    }

echo "<br>(1) O fatorial de $numero é: $resultado" ;
     //Calcular numero fatorial
    $resultado = somanumero($numero);

    echo "<br>(2) O Soma de numero $numero é: $resultado";
    
    $resultado  = media($numero);
    echo "<br> (3)Média da soma $numero é: $resultado";
    
   // $resultado  =media($numero);
   $resultado  =fracao($numero);
    echo "<br>(4) frações 1/1 + 1/2 + 1/3 + ... + 1/valor $numero é: $resultado";
    
    $resultado  =fracao($numero);
   
    echo $numero;


    ?>

</body>
</html>