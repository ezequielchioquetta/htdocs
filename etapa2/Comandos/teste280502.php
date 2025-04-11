<?php
function calcularFatorial($numero) {
    $fatorial = 1;
    
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    return $fatorial;
}
function somanumero($numero) {
    

    $somanumero = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $somanumero += $i;
    
    }
    return $somanumero;
}
// Função para calcular a média dos números de 1 até o valor fornecido
function media($numero)
{
    $media=0;
    $somanumero = somanumero($numero);
    $media = $somanumero / $numero;
    return $media;
}
 // Função para calcular a soma das frações 1/1 + 1/2 + 1/3 + ... + 1/valor
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
    <form id="for" action="teste280502.php">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"></br>
    <select name="missao">
					<option value="Fatorial">Calcular Fatorial</option>
					<option value="somanumero"> A Soman dos Nun</option>
					<option value="somanumero"> Calculo de Média</option>
                    <option value="fracoes"> Calculo de Frações</option>
				</select>
    <input type="Submit" value="executar">
</form>
 </div>    
<section>
<?php 
    //4if(isset($_GET["numero"])){
       //4 $numero=$_GET["numero"];
        
    //4}
   // $resultado = calcularFatorial($numero);

//echo "O fatorial de $numero é: $resultado";

    
   // $fatorial=$_get['fatorial'];
    //$somanumero=$_get['somanumero'];
    //$media=$_get['media'];
   // $fracoes=$_get['fracoes'];
    
    //calculo Geral
    if(isset($_GET["numero"])){
        $numero=$_GET["numero"];
     // Calcular numero  fatorial   
    }
    
    $resultado = calcularFatorial($numero);

echo "<br>(1) O fatorial de $numero é: $resultado" ;
     //Calcular numero fatorial
    $resultado = somanumero($numero);

    echo "<br>(2) O Soma de numero $numero é: $resultado";
    
    $resultado  =media($numero);
    echo "<br> (3)Média da soma $media é: $resultado";
    
    
    $resultado  =fracao($numero);
    echo "<br>(4) frações 1/1 + 1/2 + 1/3 + ... + 1/valor $numero é: $resultado";
    
    echo $somanumero;
    echo $numero;
    echo $media;
   // $resultado  =fracao($numero);

    {
        
     //2   {
      //2      $calcularFatorial=calcularFatorial($numero);
      //2      echo "$numero calcularFatorial = $calcularFatorial calcularFatorial";
      //2  }
     //2   {
       //2     $somanumero=somanumero($numero);
        //2    echo "$numero somanumero = $somanumero somanumero";
        //2}  
      // 1 {
         //1   $media=media($numero);
         //1    echo "$numero media = $media media";
      //1   }
      //1   {
       //1      $fracoes=fracoes($numero);
       //1      echo "$numero fracoes = $fracoes fracoes";
       //1  }   
    }
 ?>

</body>
</html>