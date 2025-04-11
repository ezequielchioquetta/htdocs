<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>

    <h2>Cadastro de Autor</h2>
    
    <form method="GET">
        Nome: <input type="text" name="nome"><br>
        Nacionalidade:
        <select name="nacionalidade">
            <?php
            // Conectar ao banco de dados
            $conexao = new mysqli("localhost", "root", "", "biblioteca");

            // Verificar a conexão
            if ($conexao->connect_error) {
                die("Erro na conexão: " . $conexao->connect_error);
            }

            // Consultar todas as nacionalidades
            $result = $conexao->query("SELECT DISTINCT nacionalidade FROM autor");

            // Exibir as nacionalidades no dropdown
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['nacionalidade']}'>{$row['nacionalidade']}</option>";
            }

            $conexao->close();
            ?>
        </select><br>

        <input type="submit" name="autor">
    </form>

    <?php
    // Teste se o formulário foi submetido
    if (isset($_GET["autor"])) {
        // Recebe os dados do formulário
        $nome = $_GET["nome"];
        $nacionalidade = $_GET["nacionalidade"];
    
        // Conecta ao banco de dados
        $conexao = new mysqli("localhost", "root", "", "biblioteca");

        // Verifica se a conexão foi bem-sucedida
        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }

        // Prepara a consulta SQL
        $sql = "INSERT INTO autor (nome, nacionalidade) VALUES (?, ?)";

        // Prepara a declaração
        $stmt = $conexao->prepare($sql);

        // Verifica se a preparação da declaração foi bem-sucedida
        if ($stmt === false) {
            die("Erro na preparação da declaração: " . $conexao->error);
        }

        // Liga os parâmetros à declaração
        $stmt->bind_param("ss", $nome, $nacionalidade);

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

    <footer>
        <br>
        <a href="http://localhost/etapafinal/index.html" target="_self" rel="next"><strong>Voltar</strong></a>
    </footer>

    <p>Site criado pelo Aluno Chioquetta Ezequiel do <a href="https://gustavoguanabara.github.io" target="_blank">Cursoemvideo</a></p>

</body>
</html>
