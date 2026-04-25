<?php
// ============================================
// PAGINA DE CADASTRO
// ============================================
include 'conexao.php';

$msg = '';
$eh_sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $ano_modelo = $_POST['ano_modelo'];
    $combustivel = $_POST['combustivel'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $quilometragem = $_POST['quilometragem'];
    $observacoes = $_POST['observacoes'];
    $data_cadastro = date('Y-m-d');

    $sql = "INSERT INTO veiculos
        (placa, marca, modelo, cor, ano_fabricacao, ano_modelo, combustivel, chassi, renavam, quilometragem, data_cadastro, observacoes)
        VALUES
        ('$placa', '$marca', '$modelo', '$cor', '$ano_fabricacao', '$ano_modelo', '$combustivel', '$chassi', '$renavam', '$quilometragem', '$data_cadastro', '$observacoes')";

    if (mysqli_query($conn, $sql)) {
        $msg = 'Veículo cadastrado com sucesso!!';
        $eh_sucesso = true;
    } else {
        $msg = 'Erro ao salvar';
    }
}

$titulo = 'Cadastrar Veículo';
$extra_js = '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>' . "\n"
          . '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>' . "\n"
          . '<script src="assets/js/cadastro.js"></script>';
include 'includes/header.php';
?>

<div class="box">
    <h1>Cadastro de Veículos</h1>

    <?php if ($msg): ?>
        <div class="alert <?php echo $eh_sucesso ? 'alert-success' : 'alert-danger'; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-actions">
            <button type="button" id="btn-aleatorio" class="btn btn-purple">
                🎲 Preencher dados aleatórios
            </button>
            <button type="submit" class="btn btn-success">Salvar Veículo</button>
        </div>

        <div class="form-group">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control" placeholder="Ex: ABC1D23" required>
        </div>

        <div class="form-group">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="Ex: Chevrolet" required>
        </div>

        <div class="form-group">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" placeholder="Ex: Onix" required>
        </div>

        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control" placeholder="Ex: Prata" required>
        </div>

        <div class="form-group">
            <label>Ano de Fabricação</label>
            <input type="number" name="ano_fabricacao" class="form-control" placeholder="Ex: 2020" required>
        </div>

        <div class="form-group">
            <label>Ano do Modelo</label>
            <input type="number" name="ano_modelo" class="form-control" placeholder="Ex: 2021" required>
        </div>

        <div class="form-group">
            <label>Combustível</label>
            <select name="combustivel" class="form-control" required>
                <option value="">Selecione</option>
                <option value="Gasolina">Gasolina</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
                <option value="Flex">Flex</option>
            </select>
        </div>

        <div class="form-group">
            <label>Chassi</label>
            <input type="text" name="chassi" class="form-control" placeholder="Ex: 9BWZZZ377VT004251" required>
        </div>

        <div class="form-group">
            <label>Renavam</label>
            <input type="text" name="renavam" class="form-control" placeholder="Ex: 12345678901" required>
        </div>

        <div class="form-group">
            <label>Quilometragem</label>
            <input type="number" name="quilometragem" class="form-control" placeholder="Ex: 45000" required>
        </div>

        <div class="form-group">
            <label>Observações</label>
            <textarea name="observacoes" class="form-control" rows="4" placeholder="Digite aqui observacoes sobre o veiculo..." required></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">Salvar Veículo</button>
        </div>
    </form>

    <br>
    <a href="listagem.php" class="text-link">Ver veiculos cadastrados</a>
</div>

<?php include 'includes/footer.php'; ?>
