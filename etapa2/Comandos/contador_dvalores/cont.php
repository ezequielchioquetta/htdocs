<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contadores de vetores </title>
</head>
<body>
Contadores e somador de valores <br>
<form action="contador2" method="get">

Informe um valor positivo
<input type="text" name="valor">
<br>
<input type="submit" value="enviar">
</form>


<form name="Form1"  action="contador2.php" method="get">
    <p>
    <label for="valor"> Quantidade de horas trabalhadas </label>
    <input type="valor" name="valor" id="valor" valor="<?php echo $qh;?>"/>
    </p>
    <p>
    <label for="soma"> Valor da hora trabalhada </label>
    <input type="soma" name="soma" id="soma" value="<?php echo $vh;?>"/>
    </p> 
    <p>
    
    <p>
        <input type="submit" name="Enviar" value="Enviar"/>
    </p>
  </form>



</body>
</html>