<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="imagem/eg.jpg">
    </header>
    <nav>
        <span>Livro de Registro</span>   
        <button><a class="nav-btn" >Consultar Registro</a></button>
        <span>Laboratório</span>   
        <button><a class="nav-btn" href="index.php">Realizar Registro</a></button>
        <span>Escola Guadalupe</span>     
    </nav>

    <main id="container" >
        <h2>Status registro</h2>
        <?php

        include "conexao.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fiscal = $_POST['fiscal'];
            $data = $_POST['data'];
            $turno = $_POST['turno'];
            $gabinetes = $_POST['gabinetes'];
            $telasLCD = $_POST['telasLCD'];
            $observacoes = $_POST['observacoes'];

            // Preparar e executar a consulta de inserção
            $sql = "INSERT INTO labeg (fiscal, data, turno, gabinetes, telasLCD, observacoes) 
                    VALUES ('$fiscal', '$data', '$turno', '$gabinetes', '$telasLCD', '$observacoes')";

            if ($conn->query($sql) === TRUE) {
                echo "<div id='sucess'>Registro inserido com sucesso.</div>";
            } else {
                echo "<div id='error'>Erro: " . $sql . "<br>" . $conn->error."</div>";
            }
        }

        // Fechar a conexão
        $conn->close();

        ?>
    </main>

    <footer>

        <address>
            E.M.E.F Nossa Sr. de Guadalupe<br>
            Avenida Princesa Izabel, S/N<br>
            Concórdia do Pará - Pará <br>
        </address>

    </footer>
</body>
</html>