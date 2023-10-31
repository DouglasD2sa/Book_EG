<?php

$host = 'localhost'; 
$usuario = 'root';
$senha = ''; 
$banco_de_dados = 'registroslab'; 

// Conectar ao banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verificar a conexão
if ($conexao->connect_error) {
    die("erro:: " . $conexao->connect_error);
}
echo "Conexão bem-sucedida";

// Fechar a conexão
$conexao->close();

?>