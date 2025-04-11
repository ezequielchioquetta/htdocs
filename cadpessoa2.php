<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>

</head>
<body>
    
<form action="cadpessoa2.php">

Digite um texto
<input type="text" name="nome">
<br>
Digite o tefefone:
<input type="text" name="Tefefone">
<br>
Selecione o pais
<select name="paises.pais">


<?php 

$conexao=new mysqli("localhost","root","","paises");
$res=$conexao->query("SELECT * FROM paises.pais");
    while ($linha=$res->fetch_assoc()){
    echo "<option value=" . $linha['idpais'] . ">" . $linha['nacionalidade'] ."</option>";
    }
    $conexao->close();
    ?>
</select>
</form>





</body>
</html>