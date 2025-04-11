<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico1</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <header>
    <h1>Grem Card</h1>
    </header>
    <section>
    <form name="calcular" action="resultado.php" method="get">    
    <label for="nome">Nome</label> 
    <input type="text" name="nome" id="idnome">

    <p>Qual o Pais do cidadão?</p>
        <select  name='pais' id="idpais">;
            <option value="1">Inglaterra</option>;
            <option value="2">Espanha</option>;
            <option value="3">Itália</option>;
            <option value="4">Brasil</option>;
        </select>
        <input type="submit" valor="calcular">
   </form>
</section>
<br>
<a href="https://tectiezequiel.github.io/html/moldes/menu2.1"> voltar</a>
</body>
</html>