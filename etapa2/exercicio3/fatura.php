<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatura</title>
</head>
<body>
<?php 
    //Receber os produtod
    $produto=$_POST["produto"];
    $tipo=$_POST["tipo"];
    $preco=$_POST["preco"];
    $quant=$_POST["quant"];
    //compara o tipo
   
    if($tipo=="un"){
        $venda=$preco*$quant;
        $informacao="venda unitaria";
    }
    else if($tipo=="cx12"){
        $venda=$preco*$quant*12;
        $informacao="caixa com 12 unidades";
    }
    else if ($tipo=="cx24"){
        $venda=$preco*$quant*24;
        $informacao="caixa com 24 unidades";
    }
    
    ?> 

<p>Produto vendido:</p>
<?php 
    if($produto==1){
        echo"caneta";
    }
    else if ($produto==2){
        echo"lapis";
    } 
    else if ($produto==3){
        echo "caderno";
    }
?>

Total da venda:
<?php echo $venda;?>
<br>
<?php 
echo $informacao;?>
   
</body>
</html>