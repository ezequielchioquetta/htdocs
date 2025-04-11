<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../advogados/estilo/stylo.css">
    <link rel="shortcut icon" href="../advogados/imagens/rio-grande-do-sul-logo.ico" type="image/x-icon">
</head>

<body>

    <section class="imagem" id="img02">
        <header style="
    color:white;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 1.2em;
    background-position:center;
    padding: 1px 1px;
    margin-left:0px ;
    ">
            <h1 style="text-align: center;">Chioquetta Advogados & cia</h1>
        </header>
        <nav>
            <a href="http://localhost/etapafinal/index.php" target="_self" rel="next">Home </a>
            <a href="http://localhost/etapafinal/advogados/pag_adv.php" target="_self" rel="next">Advogados</a>
            <a href="http://localhost/etapafinal/clientes/clientes.php" target="_self" rel="next">Clientes</a>
            <a href="http://localhost/etapafinal/processo/processo.php" target="_self" rel="next">Processos</a>
        </nav>

        <section class="imagem" id="img01">
            <h2>Processo</h2>
            <?php
            // Conectar ao banco de dados
            $conexao = new mysqli("localhost", "root", "", "escritorio");

            // Verificar a conexão
            if ($conexao->connect_error) {
                die("Erro na conexão: " . $conexao->connect_error);
            }

            ?> Numero do Advogado
            <select name="id_adv">
                <?php
                // Conectar ao banco de dados
                $conexao = new mysqli("localhost", "root", "", "escritorio");
    
                // Verificar a conexão
                if ($conexao->connect_error) {
                    die("Erro na conexão: " . $conexao->connect_error);
                }
    
                // Consultar todos os advogados
                $result_advogados = $conexao->query("SELECT id_adv, nome FROM advogados");
    
                // Exibir os advogados no dropdown
                while ($row_advogados = $result_advogados->fetch_assoc()) {
                    echo "<option value='{$row_advogados['id_adv']}'>{$row_advogados['id_adv']}</option>";
                }
    
                // Fechar a conexão
                $conexao->close();
                ?>
            </select>
             Nome do cliente
            <select name="nome">
                <?php
                // Conectar ao banco de dados
                $conexao = new mysqli("localhost", "root", "", "escritorio");
    
                // Verificar a conexão
                if ($conexao->connect_error) {
                    die("Erro na conexão: " . $conexao->connect_error);
                }
    
                // Consultar todos os advogados
                $result_advogados = $conexao->query("SELECT nome, nome FROM clientes");
    
                // Exibir os clientes no dropdown
                while ($row_clientes = $result_advogados->fetch_assoc()) {
                    echo "<option value='{$row_clientes['id_adv']}'>{$row_clientes['nome']}</option>";
                }
              
                 // Fechar a conexão
                 $conexao->close();
                 ?>
             </select>
                
                   
       
       
       
               

        <footer>
            <br>
            <a href="http://localhost/etapafinal/index.php" target="_self" rel="next"><strong>Voltar</strong> </a>
            <footer>
                <p>site criado pelo Aluno Chioquetta Ezequiel do <a href="https://gustavoguanabara.github.io" target="_blank">Cursoemvideo</a></p>
            </footer>

</body>

</html>
