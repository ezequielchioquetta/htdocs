<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilizar comandondo php</title>
</head>
<body>
<form name="teste" action="teste2.php" method="post">
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
    Utilizando comando php
</div>
<div style="position:relativa;margin:5px; top:50px;left: 200px;">
    <label>Nome do funcionario</label>
    <input type="text" id="nome" name="nome">
</div>
<div style="position:relativa;margin: 5px; top: 70px;left: 200px;">   
<label>Salário base </label>
<input type="text" id="salario" name="salario">
</div>
<div style="position:relativa;margin: 5px;top: 90px;left: 200px;">   
<label>Percentual de desconto </label>
<input type="text" id="percentual" name="percentual">
</div>
<div style="position:relativa;margin: 5px;top: 150px;left: 400px;">   
<label>Percentual de desconto </label>
<input type="submit" id="calcular" name="calcular">
</div>
</form>
</body>
</html>