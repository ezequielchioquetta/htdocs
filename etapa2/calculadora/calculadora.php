<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../calculadora/imagens/favicon.png" type="image/x-icon">
    </head>
    <body>
       
    
            <form name="calcular" action="resultado.php" method="get">;
          <div>
              <p>Calculadora Simples </p> 
          </div>
    <div> Informe o primeiro valor:
        <input type="text" id="valor1" name="valor1">
    </div>
    <div> Informe o segundo valor:
        <input type="text" id="valor2" name="valor2">
    </div>
    <div> 
        Qual operação deseja?
        <select id="oper" name='oper'>;
            <option value="1">Soma</option>;
            <option value="2">Subtrair</option>;
            <option value="3">multiplicar</option>;
            <option value="4">dividir</option>;
        </select>
    </div>
    <div>
        <input type="submit" valor="calcular">;
    </div>
    </form>

    </body>
    </html>