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
    <h1 style="text-align: center;">Chioquetta Advogados & cia

    </h1>
        
    </header>
     <nav>
    <a href="http://localhost/etapafinal/index.php" target="_self" rel="next" >Home </a>
    <a href="http://localhost/etapafinal/advogados/pag_adv.php" target="_self" rel="next">Advogados</a>
    <a href="http://localhost/etapafinal/clientes/clientes.php" target="_self" rel="next">Clientes</a>
    <a href="http://localhost/etapafinal/processo/processo.php" target="_self" rel="next">Processos</a>    
</nav>   

   
        <section class="imagem" id="img01">
    <head><h2>Clientes</h2>
    <form method="GET">
        Nome do Cliente:
        <input type="text" name="nome">
        <br>
        Data de Nascimento:
        <input type="date" name="data_nac">
        <br>
        cpf:
        <input type="text" name="cpf">
        <br>
        endereco:
        <input type="text" name="endereco">
        <br>
        Telefone:
        <input type="text" name="telefone">
        <br>
        <input type="submit" name="clientes">
    </form>
    </head>
    <?php
    // Teste se o formulário foi submetido
    if (isset($_GET["clientes"])) {
        // Recebe os dados do formulário
        $nome = $_GET["nome"];
        $data_nac = $_GET["data_nac"];
        $cpf = $_GET["cpf"];
        $endereco = $_GET["endereco"];
        $telefone =$_GET["telefone"];
        // Conecta ao banco de dados
        $conexao = new mysqli("localhost", "root", "", "escritorio");

        // Verifica se a conexão foi bem-sucedida
        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }

        // Prepara a consulta SQL
        $sql = "INSERT INTO clientes (nome,data_nac,cpf,endereco,telefone) VALUES (?, ?, ?, ?, ?)";

              // Prepara a declaração
              $stmt = $conexao->prepare($sql);

              // Verifica se a preparação da declaração foi bem-sucedida
              if ($stmt === false) {
                  die("Erro na preparação da declaração: " . $conexao->error);
              }

        // Liga os parâmetros à declaração
        $stmt->bind_param("sssss", $nome, $data_nac, $cpf, $endereco, $telefone);

        // Executa a declaração
        if ($stmt->execute()) {
            echo "Dados gravados com sucesso!";
        } else {
            echo "Erro ao gravar os dados: " . $stmt->error;
        }

        // Fecha a declaração e a conexão
        $stmt->close();
        $conexao->close();
    }
    ?>
            
            </section>
            
            <footer>
<br>
<a href="http://localhost/etapafinal/index.php" target="_self" rel="next" ><strong>Voltar</strong> </a>
        <footer>
        <p>site criado pelo Aluno Chioquetta Ezequiel do <a href="https://gustavoguanabara.github.io" target="_blank">Cursoemvideo</a></p>
        </footer>   

</body>
</html>