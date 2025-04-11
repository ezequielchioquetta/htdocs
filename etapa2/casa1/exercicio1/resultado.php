<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">    
    </head>
    <body>
    <main> 
    <?php 
    
    //Recebe valores 
    $nome=$_GET["nome"];  
    $pais=$_GET["pais"];
    //$r=["pais"];
       //Faz as comparações
       
      if ($pais==1) {
        $r=$pais;
        echo $nome." ! Hello Programador!";
    }
    else if($pais==2){
        $r=$pais;
        echo $nome." ! Hola, Programador!";
    }
    else if($pais==3){
        $r=$pais;
        echo $nome." Ciao, Programador!";
    }
    else if($pais==4){
        $r=$pais;
        echo $nome." Ola, Programador!";
    }
     
      


    ?>
  
 </main> 
    
<br>
<br>
    <a href="http://localhost/etapa2/casa1/exercicio1/exercico1.php" > voltar</a>


</body>
</html>