<?php
// inclui a conexao
include '../conexao.php';

// pega o id enviado
$id = $_POST['id'];

// deleta o veiculo
$sql = "DELETE FROM veiculos WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['sucesso' => true, 'mensagem' => 'veiculo deletado']);
} else {
    echo json_encode(['sucesso' => false, 'mensagem' => 'erro ao deletar']);
}
?>
