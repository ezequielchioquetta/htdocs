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
/*
$vh=0;
$qh=0;
$pd=0; 
// recebeu os valores por get

if (isset($_get["vh"]) ) {
    $vh=$_GET["vh"];
    $qh=$_GET["qh"];
    $pd=$_GET["pd"];
}*/
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
        //$pd = $_POST["desconto"];
        $sbruto= $qh*$vh;
        $sliquido = $sbruto - $desconto;
        
    }
if ($sliquido <=1900) {
   echo "<h3> isento </h3>";
}
elseif ($sliquido>1900 && $sliquido<2800){
$ir=$sliquido*7.5/100; echo "<h3>7.5 descotado IR<br><br></h3>";
    }
elseif ($sliquido>2800 && $sliquido<3700){
        $ir=$sliquido*15/100;echo "<h3>15 descotado IR<br><br></h3>";
    }

    elseif ($sliquido>3700 && $sliquido<4660){
                $ir=$sliquido*22.5/100;echo "<h3>22.5 descotado IR<br><br></h3>";
    }
elseif ($sliquido>4660){
        $ir=$sliquido*27.5/100;echo "<h3>27.5 descotado IR <br><br></h3>";
         }
            
//-------
    if ($sliquido <=1690) {
        $fgts=$sliquido*8/100;echo"<h3>descotado FGTS</h3>";
        }
    elseif ($sliquido>1690 && $sliquido<2800){
        $fgts=$sliquido*9/100;echo"<h3>9 descotado FGTS</h3>";
             }
     elseif ($sliquido>2800 && $sliquido<5640){
    $fgts=$sliquido*11/100;echo"<h3>11 descotado FGTS,</h3>";
            }
    elseif ($sliquido>5640){
    $fgts=$sliquido*11.5/100;echo "<h3> 11.5 descotado FGTS</h3>";
             }
                                               


$desconto= $fgts + $ir;
$sliquido = $sbruto - $desconto;


?>







<form name="Form1"  action="" method="post">
    <p>
    <label for="qtdhoras"> Quantidade de horas trabalhadas </label>
    <input type="text" name="qtdhoras" id="qtdhoras" value="<?php echo $qh;?>"/>
    </p>
    <p>
    <label for="vhoras"> Valor da hora trabalhada </label>
    <input type="text" name="vhoras" id="vhoras" value="<?php echo $vh;?>"/>
    </p> 
    <p>
    
    <p>
        <input type="submit" name="Enviar" value="Enviar"/>
    </p>
  </form>
        
        <h2>Salário Bruto:<?php echo $sbruto;?><br> </h2>
        <h2>Desconto:<?php echo $desconto;?> <br></h2>
        <h2>Salário liquido:<?php echo $sliquido;?> <br></h2>  
        <h2>Valor do ir <?php echo $ir?><br></h2>
        <h2>Valor do fgts <?php echo $fgts?><br></h2>
</body>
</html>