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
 
<title> Meu Primeiro programa</title> 
<style>
p{
font-size:3em;
}
main{
	background-color:black;
	color:white;
}
</style>
<body>
	<main>
<h1> Meu Primeiro programa em php</h1>
<?php echo Turma."<br>";
?>
<p> Olá mundo</p><br>
<?php
echo "valor é".$valor."<br>";
echo "é do tipo =".gettype($valor); 
echo"<br>O nome=".$nome;
echo"<br>É do tipo =".gettype($nome); 
?>
</main>
<div>
<?php 
phpinfo();
?>
</div>
</body>
</html>

 
