
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
if(isset($_GET["valor"])){
$valor=$_GET["valor"];
$soma=0;
$media=0;
$i=0;
$fat=0;
 

//executar o loop
for($i=1; $i=$valor;$i++){
$soma=$soma+$i;
$media=$soma/$i;
$fat=$soma;

}
?>


<h1>Resultado da execução do Loop<h1>


   
<h2>Você pediu para contar até <?php echo $valor;?></h2>
<h2>Todos os valores samados deu <?php echo $soma;?><h2>
<h2>Média <?php echo $media?></h2>
<h2>Fatorial <?php echo $fat?></h2>
<h2>Esse foi o loop for</h2>
<h2> <?php echo $i ?></h2>
<h2> <?php echo $valor ?></h2>
</body>
</html>
