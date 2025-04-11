<?php
define("Turma","Turma de programação php");
//Variavel 
$valor=100;
$salario=1200.25;
$nome="Chioquetta Ezequiel";
$cond=TRUE;
?>
<html lang="pt-br">
<head>
<meta charset="UTF-8>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<Meta name=viewport" content="width=device-width,initial-sacale=1.0">
 
<title> Controle de Vendas </title> 

<body>
<p>Controle de Vendas</p>

<form id="Entrada" action="vendas.php" method="get">
cliente<input type="text" name="nome"><br>
produto:<select name="produto">
        <option value="lapis">lápis</option>
        <option value="caneta">caneta</option>
</select><br>
quantidade <input type="text" name="quant"><br>
preço <input type="text" name="preço"><br>
<input type="submit" value="confirmar"><br>
</form>


</body>
</html>

 