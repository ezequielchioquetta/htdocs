<?php
function calcularFatorial($numero) {
    $fatorial = 1;
    
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    return $fatorial;
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
    <form id="for" action="teste280501.php">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"></br>
    <input type="Submit" value="executar">
</form>
 </div>    
<section>
<?php 

    $inicio=1;
    $fim=10;
    $incremento=1;
    if(isset($_GET["numero"])){
        $numero=$_GET["numero"];
        
    }
    $resultado = calcularFatorial($numero);

echo "O fatorial de $numero é: $resultado";
?>
</body>
</html>