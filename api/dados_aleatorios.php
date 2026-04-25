<?php
// gera dados aleatorios de veiculo pra testar o cadastro

$marcas = ['Chevrolet', 'Fiat', 'Volkswagen', 'Ford', 'Toyota', 'Honda', 'Hyundai', 'Renault', 'Jeep', 'Nissan'];
$modelos = ['Onix', 'Argo', 'Gol', 'Ka', 'Corolla', 'Civic', 'HB20', 'Kwid', 'Compass', 'Versa'];
$cores = ['Prata', 'Preto', 'Branco', 'Vermelho', 'Azul', 'Cinza', 'Verde', 'Amarelo'];
$combustiveis = ['Gasolina', 'Etanol', 'Diesel', 'Flex'];

$marca = $marcas[array_rand($marcas)];
$modelo = $modelos[array_rand($modelos)];
$cor = $cores[array_rand($cores)];
$combustivel = $combustiveis[array_rand($combustiveis)];

// gera placa no formato mercosul
$letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$nums = '0123456789';
$placa = $letras[rand(0,25)] . $letras[rand(0,25)] . $letras[rand(0,25)] . $nums[rand(0,9)] . $letras[rand(0,25)] . $nums[rand(0,9)] . $nums[rand(0,9)];

// gera chassi fake
$chassi = '';
for ($i = 0; $i < 17; $i++) {
    $chassi .= (rand(0,1) == 0) ? $letras[rand(0,25)] : $nums[rand(0,9)];
}

// gera renavam fake
$renavam = '';
for ($i = 0; $i < 11; $i++) {
    $renavam .= $nums[rand(0,9)];
}

$dados = [
    'placa' => $placa,
    'marca' => $marca,
    'modelo' => $modelo,
    'cor' => $cor,
    'ano_fabricacao' => rand(2015, 2024),
    'ano_modelo' => rand(2016, 2025),
    'combustivel' => $combustivel,
    'chassi' => $chassi,
    'renavam' => $renavam,
    'quilometragem' => rand(10000, 150000),
    'observacoes' => 'Veiculo gerado automaticamente para testes do sistema.'
];

header('Content-Type: application/json');
echo json_encode($dados);
?>
