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
$qh=0;
$vh=0;
$desconto=0;
$pd=0;
$sbruto=0;
$sliquido=0;
$fgts=0;
$ir=0;
    if (isset($_POST["Enviar"])) {
        $qh = $_POST["qtdhoras"];
        $vh = $_POST["vhoras"];
        $pd = $_POST["desconto"];
        $sbruto= $qh*$vh;
        $desconto = ($sbruto * $pd) /100;  
        $sliquido = $sbruto - $desconto;



        ?>


        <html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form name="Form1"  action="" method="post">
    <p>
    <label for="qtdhoras"> Quantidade de horas trabalhadas </label>
    <input type="text" name="qtdhoras" id="qtdhoras" value="<?php echo $qh;?>"/>
    </p>
   
    <p>
    <label for="desconto">desconto</label>
    <select name="desconto" id="desconto">
        <option value="8" <?php if($pd==8) {echo 'selected=selected"';}?>>8%</option>
        <option value="9" <?php if($pd==9) {echo 'selected=selected"';}?>>9%</option>
        <option value="11" <?php if($pd==11) {echo 'selected=selected"';}?>>11%</option>
    </select>
    </p>   
    <p>
        <input type="submit" name="Enviar" value="Enviar"/>
    </p>
  </form>
        
        <h2>Salário Bruto:<?php echo $sbruto;?> </h2>
        <h2>Desconto:<?php echo $desconto;?> </h2>
        <h2>Salário liquido:<?php echo $sliquido;?> </h2>  
        <h2>Valor do ir <?php echo $ir?></h2>
        <h2>Valor do fgts <?php echo $fgts?></h2>
</body>
</html>
