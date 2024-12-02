<?php
include_once('conexao.php');

// Verificar se o ID foi passado via GET
if(isset($_GET["id"])){
  $id = $_GET["id"]; // Corrigido para $_GET["id"] (não precisa ser maiúsculo)
  
  // Preparando a query SQL
  $SQL = "DELETE FROM tb_usuario WHERE id_usuario = $id";
  
  // Executando...
  if($conexao->query($SQL) === true){
    echo "Usuário excluído com sucesso"; // Corrigido ortografia "excluido" -> "excluído"
  } else { 
    echo "ID não encontrado."; // Adicionado echo para exibir a mensagem de erro
  }
} else {
  echo "ID não foi fornecido."; // Adicionado para caso o ID não seja passado
}

?>
