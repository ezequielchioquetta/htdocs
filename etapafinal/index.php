<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chioquetta Advogados & cia</title>
    <link rel="shortcut icon" href="../etapafinal/advogados/imagens/rio-grande-do-sul-logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./stylo/style3.css">
</head>
<body>

   <header>
        <h1>Chioquetta Advogados & cia</h1>
   </header>
   <nav>
    <a href="http://localhost/etapafinal/index.php" target="_self" rel="next" >Home </a>
    <a href="http://localhost/etapafinal/advogados/pag_adv.php" target="_self" rel="next">Advogados</a>
    <a href="http://localhost/etapafinal/clientes/clientes.php" target="_self" rel="next">Clientes</a>
    <a href="http://localhost/etapafinal/processo/processo.php" target="_self" rel="next"">Processos</a>    
</nav> 
    <section class="imagem" id="img01">  
    <main>
        
        <head><h2>Processo</h2>
    <form method="GET">
        Numero de processo
        <input type="text" name="id_proc">
        <br>
        <input type="submit" name="buscar">
    </form>
</head>

<?php
// Teste se o formulário foi submetido
if (isset($_GET["buscar"])) {
    // Recebe o número do processo do formulário
    $id_proc = $_GET["id_proc"];

    // Conecta ao banco de dados
    $conexao = new mysqli("localhost", "root", "", "escritorio");

    // Verifica se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Verifica se o id_proc existe na tabela processo
    $stmtProcesso = $conexao->prepare("SELECT * FROM processo WHERE id_proc = ?");
    $stmtProcesso->bind_param("s", $id_proc);

    // Executa a declaração
    $stmtProcesso->execute();

    // Obtém o resultado da consulta
    $resultProcesso = $stmtProcesso->get_result();

    // Verifica se há registros na tabela processo
    if ($resultProcesso->num_rows > 0) {
        echo "<h2>Resultado da Busca:</h2>";
        echo "<table border='1'><tr><th>ID Proc</th><th>ID Adv</th><th>Nome Advogado</th><th>Cituação</th><th>Data Início</th></tr>";

        // Obtém os resultados da tabela processo
        while ($rowProcesso = $resultProcesso->fetch_assoc()) {
            // Obtém informações do advogado
            $stmtAdvogado = $conexao->prepare("SELECT id_adv, nome FROM advogados WHERE id_adv = ?");
            $stmtAdvogado->bind_param("s", $rowProcesso['id_adv']);
            $stmtAdvogado->execute();
            $resultAdvogado = $stmtAdvogado->get_result();

            // Verifica se há registros na tabela advogados
            if ($resultAdvogado->num_rows > 0) {
                $rowAdvogado = $resultAdvogado->fetch_assoc();
                echo "<tr><td>{$rowProcesso['id_proc']}</td><td>{$rowProcesso['id_adv']}</td><td>{$rowAdvogado['nome']}</td><td>{$rowProcesso['cituacao']}</td><td>{$rowProcesso['data_ini']}</td></tr>";
            } else {
                echo "<tr><td>{$rowProcesso['id_proc']}</td><td>{$rowProcesso['id_adv']}</td><td>Não encontrado</td><td>{$rowProcesso['cituacao']}</td><td>{$rowProcesso['data_ini']}</td></tr>";
            }

            // Fecha a declaração e o resultado do advogado
            $stmtAdvogado->close();
            $resultAdvogado->close();
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado para o número do processo {$id_proc} na tabela 'processo'.";
    }

    // Fecha as declarações e a conexão
    $stmtProcesso->close();
    $conexao->close();
}
?>



            
            <article>
                <anside> 
                    <h3><p></p><strong>Chioquetta Advogados & Cia</strong> - Conduzindo seus interesses com integridade e eficácia. Seu sucesso, nossa "prioridade!"</h3>
                    <h3><br>Chioquetta Advogados & Cia: Confiabilidade, Inovação e Excelência Jurídica!
                    <br>   
                    Desde 1989, Chioquetta Advogados & Cia tem sido uma referência em serviços jurídicos de alta qualidade. Fundado por Arnaldo Chioquetta, nosso escritório une a tradição e a experiência com a inovação trazida por Ezequiel Silva Chioquetta
                    <head><h2>Advogados</h2></head>



                <article>
                    <anside> 
                            <h3><p></p><strong>Chioquetta Advogados & Cia</strong> - Conduzindo seus interesses com integridade e eficácia. Seu sucesso, nossa "prioridade!"</h3>
                            <h3><br>Chioquetta Advogados & Cia: Confiabilidade, Inovação e Excelência Jurídica!
                            <br>   
                            Desde 1989, Chioquetta Advogados & Cia tem sido uma referência em serviços jurídicos de alta qualidade. Fundado por Arnaldo Chioquetta, nosso escritório une a tradição e a experiência com a inovação trazida por Ezequiel Silva Chioquetta desde 2012.
                            <br>    
                            <h3> ⚖️ Compromisso Ético:
                                Somos movidos pelo compromisso com a ética profissional, assegurando que cada cliente receba a orientação jurídica necessária com integridade e transparência.
                            
                            
                            </h3>
            </anside>
                
        </article>
    </section>
    <?php
            // Conecta ao banco de dados
            $conexao = new mysqli("localhost", "root", "", "escritorio");

            // Verifica se a conexão foi bem-sucedida
            if ($conexao->connect_error) {
                die("Erro na conexão: " . $conexao->connect_error);
            }

            // Prepara a consulta SQL com LIMIT para obter apenas os 10 primeiros resultados
            $sql_advogados = "SELECT * FROM advogados LIMIT 10";

            // Executa a consulta
            $result_advogados = $conexao->query($sql_advogados);

            // Exibe os resultados
            if ($result_advogados->num_rows > 0) {
                echo "<h2>10 Primeiros Advogados Cadastrados:</h2>";
                echo "<table border='1'><tr><th>ID Adv</th><th>Nome</th><th>area_direito</th><th>OAB</th><th>dataN</th><th>telefone</th></tr>";

                while ($row_advogado = $result_advogados->fetch_assoc()) {
                    echo "<tr><td>{$row_advogado['id_adv']}</td><td>{$row_advogado['nome']}</td><td>{$row_advogado['area_direito']}</td><td>{$row_advogado['oab']}</td><td>{$row_advogado['dataN']}</td><td>{$row_advogado['telefone']}</td></tr>";
                }

                echo "</table>";
            } else {
                echo "Nenhum advogado cadastrado.";
            }

            // Fecha a conexão
            $conexao->close();
            ?>

                </main>
                <footer>
          
                site criado pelo Aluno Chioquetta Ezequiel, Carvalho Diego . 

                </footer>
            </body>
            </html>
