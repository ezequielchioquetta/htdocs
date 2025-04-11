<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php_aula/style.css">
    <title>Média</title>
</head>
<body>
  <!--Entradada-->
  <?php 
$v1=$_GET['valor1']??0;
$p1=$_GET['peso1']??0;
$v2=$_GET['valor2']??0;
$p2=$_GET['peso2']??0;
?>


<main>
<!--Form-->

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

<H1>Médias Aritiméticas</H1>

<label for="valor1">1° Valor</label>
<input type="number" name="valor1" step="1" min="1" max="10" value="<?=$v1?>">

<label for="peso1">1° peso</label>
<input type="number" name="peso1" step="1" min="1" max="10" value="<?=$p1?>">

<label for="valor2">2° Valor</label>
<input type="number" name="valor2" step="1" min="1" max="10" value="<?=$v2?>">

<label for="peso2">2° peso</label>
<input type="number" name="peso2" step="1" min="1" max="10" value="<?=$p2?>">

<input type="submit" value="Calcular Média">
</form>
<!--Processamento-->
<?php 
$med= ($v1+$v2)/2;
$pod= ($v1+$v1 *$v2+$p2)/($p1+$p2);
?>


<!--print-->
<article>

<?php 
echo "$v1 ; $p1 ; $v2 , $p2 ";
?>

<h1>Cálculo das Médias </h1>
<h2>Analisando os valores <?php echo "$v1 e  $v2 "?></h2>
<ul>
<li>A média Aritimédica Simples entre os valores é igual a <?= number_format($med,2,",",".")?></li>
<li>A média Aritimédica Ponderados com pesos <?php echo"$v2 e $v1 "?> é igual a <?= number_format($pod,2,",",".")?></li>

</ul>

</article>

<footer>


</footer>
</main>
</body>
</html>