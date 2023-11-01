
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Registros</title>
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
        <h2>Registro</h2>
        <form action="gravacao.php" method="post">
            <label for="fiscal">Nome:</label>
            <input class="form-input" type="text" name="fiscal" style="width: 200px;"><br>
            Data: <input class="form-input"  type="date" name="data"> <br>
            turno: Manhã <input class="form-input" type="radio" name="turno" value="manha"> Tarde <input class="form-input" type="radio" name="turno" value="tarde"><br>
            Quantidade de Gabinetes: <input class="form-input" type="number" min="0" max="20" name="gabinetes" value="gab"><br>
            Quantidade de monitores: <input class="form-input" type="number" min="0" max="20" name="telasLCD"><br>
            <textarea class="form-input" rows="3" cols="27" placeholder="Observações" name="observacoes"></textarea>  <br> 
            <input class="form-input" type="submit" value="enviar">
        </form>
        <br>
    </main>

    <footer>

        <address>
            E.M.E.F Nossa Sr. de Guadalupe<br>
            Avenida Princesa Izabel, S/N<br>
            Concórdia do Pará - Pará <br>
        </address>

    </footer>
    <script src="script.js"></script>
</body>
</html>
