<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<style>
*{
background-color:blueviolet     ;

}


</style>

<body>
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
    Calculo da Folha mensal
</div>  
        <?php
        //Recebe  os dados da página inicial
        $nome= $_POST ["nome"];
        $salario= $_POST ["salario"];
        $percentual= $_POST ["percentual"];

       $descontos=$salario*$percentual/100;
       $a_receber=$salario-$descontos;
       ?>
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
O funcionario:<?php echo $nome;?>
</div>
<div>
O Salario total:<?php echo $salario;?>
</div>
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
Valor dos Descontos:<?php echo $descontos;?>
</div>
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
Líquido a Receber:<?php echo $a_receber;?>
</div>
</body>
</html>