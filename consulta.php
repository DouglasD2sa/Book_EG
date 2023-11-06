<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Registro - EG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="imagem/eg.jpg">
    </header>
    
    <nav>
        <span>Livro de Registro</span>   
        <button><a class="nav-btn" href="consulta.php">Consultar Registro</a></button>
        <span>Laboratório</span>   
        <button><a class="nav-btn" href="index.php">Realizar Registro</a></button>
        <span>Escola Guadalupe</span>     
    </nav>

    <main id="container" >
        <h2>Registros</h2>
        
        <table border="1px" align="center">
            <tr>
                <th>ID</th>
                <th width="175">Fiscal</th>
                <th width="85">Data</th>
                <th>Gabinetes(UND)</th>
                <th>Monitores(UND)</th>
                <th width="230">Observações</th>
            </tr>

            <?php
            include "conexao.php";
            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
                die("Erro de conexão: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM labeg";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["fiscal"] . "</td><td>" . $row["data"] . "</td><td>" . $row["gabinetes"] . "</td><td>" . $row["telasLCD"] . "</td><td>" . $row["observacoes"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum resultado encontrado</td></tr>";
            }
            $conn->close();
            ?>
        </table>

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