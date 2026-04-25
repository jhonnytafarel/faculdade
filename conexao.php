<?php
// conexao com o banco de dados da empresa
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "faculdade";

$conn = mysqli_connect($host, $usuario, $senha, $banco);

// verifica se conecto
if (!$conn) {
    die("erro ao conectar no banco: " . mysqli_connect_error());
}
?>
