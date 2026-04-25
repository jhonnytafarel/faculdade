<?php
// inclui a conexao
include '../conexao.php';

// busca os veiculo no banco
$sql = "SELECT * FROM veiculos ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// cria um array pra guardar os dados
$veiculos = array();

// pega os dados e coloca no array
while ($row = mysqli_fetch_assoc($result)) {
    $veiculos[] = $row;
}

// fala pro navegador que é JSON
header('Content-Type: application/json');

// transforma o array em JSON e mostra na tela
echo json_encode($veiculos);
?>
