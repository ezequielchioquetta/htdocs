<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>

</head>
<body>
    
<form action="cadpessoa.php">

Digite um texto
<input type="text" name="nome">
<br>
Digite o tefefone:
<input type="text" name="Tefefone">
<br>
Selecione o pais
<select name="pais">
</select>
</form>
<?php 
 //Teste se algo foi Ditado
 if(isset($_GET["autor"])){
 //Recbe os dados["Autor"];
 $autor=$_GET["autor"];
 $nacionalidade=$_GET["nacionalidade"];
//conecta no BD
$conexao=new mysqli("localhost","root","","biblioteca");
$res=$conexao->query("select*fron paises");
    while ($linha=$res->fetch_assoc()){
    echo"<option value=$linha['idpais']>$linhas['nome']</option";
    }
    $conexao->close();
<

$conexao->autocommit("false");
$conexao->query("Insert into autor(id,nome,telefone)
Values (null,'".$autor."','".$nacionalidade."')");
$conexao->commit();
$conexao->close();
echo "Gravado e vaza!. $autor ";
}// fim do if
?>




</body>
</html>
</body>
</html>