<?php

$servername = "localhost"; 
$database = "registroslab"; 
$username = "root";
$password = ""; 

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

?>
