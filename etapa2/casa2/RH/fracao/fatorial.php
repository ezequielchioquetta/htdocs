
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
    <link rel="stylesheet" href="../RH/style.css">
    <style>
*{  /*seletor global */
margin:0px;
padding:0px;
}
        h3{
        
            position: relative;
            top: 250px;
            left: 300px;
            margin-left: 100px;
            color:black;
            background-color:rgba(0, 0, 0, 0.2);
           

        }
        h2{
          color:white; 
            background-color:rgba(0, 0, 0, 0.3)
           
        }
        form{
            color: black;
            font-size: 1.5em;

        }
    </style>
</head>
<body>
<?php 
$numero=$_GET["numero"];
$soma=0;
$media=0;
$i=0;
$fat=0;

$ir=0;
if (isset($_POST["Enviar"])) {
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado; 


    $soma=$soma+$i;
$media=$soma/$i;
$fat=$i*$valor;
    return $resultado;
}

$numero = 5; // O número para calcular o fatorial
$resultado = fatorial($numero);
echo "O fatorial de $numero é: $resultado";
?>
<h2>Você pediu para contar até <?php echo $valor;?></h2>
<h2>Todos os valores samados deu <?php echo $soma;?><h2>
<h2>Média <?php echo $media?></h2>
<h2>Fatorial <?php echo $fat?></h2>
<h2>Esse foi o loop for</h2>
<h2> <?php echo $resultado ?></h2>
</body>
</html>