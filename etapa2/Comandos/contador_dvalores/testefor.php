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
    <form id="for" action="testefor.php">
    <p>valor Inicial</p>
    <input type="text" name="inicio"></br>
    <p>Valor Final</p>
    <input type="text" name="fim"></br>
    <p>Qual incremento?</p>
    <input type="text" name="incremento"></br>
    <input type="Submit" value="executar loop">
</form>
 </div>    
<section>
<?php 

    $inicio=1;
    $fim=10;
    $incremento=1;
    if(isset($_GET["inicio"])){
        $inicio=$_GET["inicio"];
        $fim=$_GET["fim"];
        $incremento=$_GET["incremento"];
    }
?>

Contando de <?php echo $inicio?> até <?php echo $fim;?> </br>
<?php 
// loup
for($contar=$inicio; $contar<=$fim;$contar=$contar+$incremento){
    echo"valor=$contar</br>";
}
?>
</section>
</body>
</html>