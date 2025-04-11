<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando for</title>
    <style>
        * {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
}

/* ELEMENTOS DA INTERFACE */

body {
    background-color: #15142b;
    background-image: linear-gradient(180deg, #372991, #15142b);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;

    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
}

header, main, section, article {
    max-width: 700px;
}

header > h1 {
    color: white;
    text-shadow: 3px 3px 0px black;
    
}

main, section, article {
    background-color: white;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.502);
}



p {
    text-align: justify;
    font-size: 2em;
}

h2, h3, h4 {
    color: #372991;
    margin: 0 0 10px 0;
}

a {
    color: #15142b;
    background-color: rgba(55, 41, 145, 0.1);
    padding: 0 3px;
    font-weight: 600;
    text-decoration: none;
    border-bottom: .5px dotted #372991;
}

a:hover {
    color: #372991;
    border-bottom: 1px solid #372991;
}

/* TABELAS E LISTAS */

table {
    min-width: 400px;
    border-spacing: 0px;
    border: 0.5px solid #372991;
    margin: 10px auto;
}

table th {
    background-color: #372991;
    color: white;
    padding: 5px;
    text-align: left;
}

table td {
    padding: 5px;
}

table tr {
    background-color: rgba(55, 41, 145, 0.05);
}

table tr:nth-child(odd) {
    background-color: rgba(55, 41, 145, 0.3);
}

table.divisao {
    border: 1px solid white;
}

table.divisao td {
    background-color: white;
    padding: 20px;
    text-align: center;
    font-size: 2.5em;
}

table.divisao  tr:nth-child(1) td:nth-child(2) {
    border-bottom: 3px solid black;
    border-left: 3px solid black;
}

table.divisao tr:nth-child(2) td:nth-child(2) {
    border-left: 3px solid black;
}

table.divisao tr:nth-child(2) td:nth-child(1) {
    text-decoration: underline;
}

ul > li::marker {
    color: #372991;
}

/* ELEMENTOS DE FORMULÁRIO */

form {
    background-color: rgba(55, 41, 145, 0.2);
    padding: 15px;
    border-radius: 10px;
}

form label {
    display: block;
    width: fit-content;
    font-size: 0.8em;
    font-weight: 100;
    background-color: rgba(55, 41, 145, 0.2);
    padding: 3px 7px;
    margin-top: 10px;
    margin-bottom: 0px;
    border-radius: 5px;
}

input[type=text], [type=number], select, input[type=date], input[type=date], input[type=datetime], input[type=email], input[type=month], input[type=password], input[type=range], input[type=tel], input[type=time], input[type=week] {
    width: 100%;
    padding: 12px 20px;
    font-size: 1em;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
  
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
  
input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset] {
    width: 100%;
    background-color: #eb9903;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #c27013;
}

input[type=button], button {
    width: 100%;
    background-color: #372991;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover, button:hover {
    background-color: #291f6c;
}

fieldset {
    border: 0.5px dotted #372991;
}

fieldset > legend {
    font-size: 0.8em;
    font-weight: 100;
    background-color: rgba(55, 41, 145, 0.2);
    padding: 3px 7px;
    border-radius: 5px;
}

input[type=radio] + label, input[type=checkbox] + label {
    display: inline-block;
    font-size: 1em;
    background-color: rgba(0, 0, 0, 0);
}

footer {
    background-color: #291f6c;
         display: block;

   
    width: 100vw;
    color: white;
    text-align: center;
    margin-top: auto;
    padding: 5px;
}

a {
   
    display: block;
    width: 100vw;
    color: white;
    background-color: #291f6c;
    text-align: center;
    margin-top: auto;
    padding: 5px;
}
a:hover{
    color:#ea912a

}



        </style>
</head>


<?php
//(1) Função para calcular o fatorial de um número
function calcularFatorial($numero) {
    $fatorial = 1;
    
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    
    return $fatorial;
}
// (2)Função para calcular a soma dos números de 1 até o valor fornecido

function somanumero($numero) {
    

    $somanumero = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $somanumero += $i;
    
    }
    return $somanumero;
}
// (3) Função para calcular a média dos números de 1 até o valor fornecido


function media($numero)
{
    $somanumero = somanumero($numero);
    $media = $somanumero / $numero-0.5;

    return $media;}
// (4) Função para calcular FRACAO
function Fracao($numero)
{
    $fracao = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $fracao += 1 / $i;
    }

    return $fracao;

}

 

          $opc = $_GET["missao"];
	switch ($opc) {
		case 0:
			// Fatorial
			break;
		case 1:
			// Soma
			break;
		case 2:
			// Média
			break;
		case 3:
			// Frações
			break;				
	}

    ?>




<body>
    <div>
    <form id="for" action="teste290501.php">
    <p>Valor para ser calculado</p>
    <input type="text" name="numero"></br>
    <select name="missao">
					<option value="0">Calcular Fatorial(01)</option>
					<option value="1"> A Soman dos Nun(02)</option>
					<option value="2"> Calculo de Média(03)</option>
                    <option value="3"> Calculo de Frações(04)</option>
				</select>
    <input type="Submit" name="btr" value="executar">
</form>
 </div>   
 <?php  


    ?>
<?php 
    if(isset($_GET["numero"])){
        $numero=$_GET["numero"];
    }
    
    $resultado = calcularFatorial($numero);

    if ($numero < 0 || !is_numeric($numero) || $numero != intval($numero)) {
        echo "Número inválido. Por favor, digite um número inteiro positivo.";
        exit; 
    }


    $opc = $_GET["missao"];
	switch ($opc) {
		case 0:
			// Fatorial
			break;
		case 1:
			// Soma
			break;
		case 2:
			// Média
			break;
		case 3:
			// Frações
			break;				
	}

echo "<br>(1) O fatorial de $numero é: $resultado" ;
     //Calcular numero fatorial
    $resultado = somanumero($numero);

    echo "<br>(2) O Soma de numero $numero é: $resultado";
    
    $resultado  = media($numero);
    echo "<br> (3)Média da soma $numero é: $resultado";
    
   // $resultado  =media($numero);
   $resultado  =fracao($numero);
    echo "<br>(4) frações 1/1 + 1/2 + 1/3 + ... + 1/valor $numero é: $resultado";
    
    $resultado  =fracao($numero);
   
    echo $numero;


    ?>

</body>
</html>