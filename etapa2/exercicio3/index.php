<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else</title>
</head>
<body>
    <h1>Vendas - Materias Escolares</h1><br>
    <form id="controle" action="fatura.php" method="post">

        Qual o produto vendido?
    <select id="produto" name="produto">
    <option value="1">caneta</option>
    <option value="2">lapis</option>
    <option value="3">caderno</option>
    </select><br>

    Tipos de produto:
    <select id="tipo" name="tipo">
    <option value="un">A unidade</option>
    <option value="cx12">Caixa com 12</option>
    <option value="cx24">Caixa com 24</option>
    </select>
    <br>
    Preço unitario:
    <input type="text"  name="preco">
    <br>
    Quantidade vendida:
    <input type="text" name="quant">
    <br>
    <input type="submit" value="vender">
    </form>
</body>
</html>