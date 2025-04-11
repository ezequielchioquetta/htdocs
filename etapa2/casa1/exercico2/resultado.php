<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Nota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

<h1>Resultado da Prova</h1>

</header>

<main> 
<?php 
    //Receber as notas
    $nota1=$_GET["nota1"];
    $nota2=$_GET["nota2"];
    $nota3=$_GET["nota3"];
  
    //Média 

  

    $media = ($nota1 + $nota2 + $nota3)/3;
    echo " A média deu : $media";
    if ($media >= 7)
    {
    echo " Parabéns você foi aprovado ";
    }
    elseif ($media > 6  && $media < 6.5)
    {
    echo " Terá de ir a recuperação ";
    }
    elseif ($media <= 6)
    {
    echo " Você foi reprovado ";
    }
    ?>
    </main>
<footer>

<a href="https://tectiezequiel.github.io/html/moldes/menu2.1/" rel="prev" target="self"> voltar</a>


</footer>
</body>
</html>