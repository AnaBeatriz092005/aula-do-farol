<?php
include("conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //obter os dados do formulário
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
  //preparar a instrução SQL com parâmetros
  $sql = "INSERT INTO cadastro (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";

  //reparar a declaração
$smtm = $conexao->prepare($SQL);

  //checar se a preparação foi bem-sucedida
if ($stmt) {

  //Associar os parâmetros
    $stmt->bind_param("ssss", $nome, $email, $telefone, $senha);

  //executar a declaração
    $stmt->execute();
    echo "  Usuario cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o usuario: " . $conexao->error;
}
  //fechar a declaração
  $stmt->closet();
} else {
    echo "Erro na preparação da declaração: " . $conexao->error;                                                                                                         
}
  //fechar a conexão
  $conexao->close();

  ?>

