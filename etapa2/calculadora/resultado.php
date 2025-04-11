<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="resultado.css">
</head>
<body>
  
    <?php 
    
    //Recebe valores 
    $valor1=$_GET["valor1"];
    $valor2=$_GET["valor2"];
    $oper=$_GET["oper"];
    $r=0;
       //Faz as comparações
       
       if ($oper==1) {
        $r=$valor1+$valor2;
        echo "<div>Operaçao : Soma</br></div>";
    }
    else if($oper==2){
        $r=$valor1-$valor2;
        echo"<div> operaçao : Subtracao</br></div>";
    }
    else if($oper==3){
        $r=$valor1*$valor2;
        echo"<div>operaçao:multiplicacao</br></div>";
    }
    else if($oper==4){
        $r=$valor1/$valor2;
        echo"<div>operaçao:divisao</br></div>";
    }
    
   
        ?> <div>
          
        O Resultado é = <?php echo $r;?>
</div>
    
<br>
    <a href="calculadora.php" rel="prev"><img src="../etapa2/imagens/voltar.png" alt=""></a>


</body>
</html>