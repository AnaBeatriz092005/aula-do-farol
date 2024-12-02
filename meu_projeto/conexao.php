<?php 
$hostname = "localhost";
$database = "Banco_de_Dados";
$username = "root";
$password = "abz@09012005";

$conexao = new mysqli($hostname, $username, $password, $database);
if ($conexao->connect_error) {
    die("Não foi possível conectar ao banco de dadis: " . $conexao->connect_error);
} else{
    echo "Conectado ao banco com sucesso!";
}
?> 