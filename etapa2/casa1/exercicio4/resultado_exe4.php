<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado_IMC</title>
</head>
<link rel="stylesheet" href="style_exe4.css">
<style>
*{
text-align: center;

}

</style>
<body>
 <header>

  <h1>Resultado do seu IMC</h1>

 </header>
 <section> 
<?php
 
    //Receber as notas
    $saude1=$_GET["saude1"]??"Deschecido";
    $saude2=$_GET["saude2"];if ($saude2==""){echo "Digite um dado"; }
    else{

    $saude3=$_GET["saude3"]; if ($saude3==""){echo "Coloque um Valor"; }
    else{

    
    //Média 

  
    
    $media=$saude2/pow($saude3,2);
    echo "<strong>$saude1 </strong><br>
     seu IMC é $media<br>";
    if ($media >= 40)
    {
    echo "<br> Obesidade Grau 3 "; 
    }
    elseif ($media >=35)
    {
    echo " Obesidade Grau 2 ";
    }
    elseif ($media >=30)
    {
    echo " Sobrepeso ";
    }
    elseif ($media >=25)
    {
    echo " Saudável ";
    }
    elseif ($media >=18.5)
    {
    echo " Magreza Leve";
    }
    elseif ($media >=17)
    {
    echo " Magreza Moderada ";
    }
    elseif ($media >=0)
    {
    echo " Magreza Grave ";
    }
    }}
    ?>

    <?php ?>
    </section>
<footer>

<a href="https://tectiezequiel.github.io/html/moldes/menu2.1/" rel="prev" target="self"> voltar</a>

</footer>
</body>
</html>



