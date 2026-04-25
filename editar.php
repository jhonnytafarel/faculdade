<?php
// ============================================
// PAGINA DE EDICAO
// ============================================
include 'conexao.php';

$msg = '';
$eh_sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
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

    $sql = "UPDATE veiculos SET
        placa = '$placa',
        marca = '$marca',
        modelo = '$modelo',
        cor = '$cor',
        ano_fabricacao = '$ano_fabricacao',
        ano_modelo = '$ano_modelo',
        combustivel = '$combustivel',
        chassi = '$chassi',
        renavam = '$renavam',
        quilometragem = '$quilometragem',
        observacoes = '$observacoes'
        WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        $msg = 'Veículo atualizado com sucesso!!';
        $eh_sucesso = true;
    } else {
        $msg = 'Erro ao atualizar';
    }
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM veiculos WHERE id = $id");
$v = mysqli_fetch_assoc($result);

$titulo = 'Editar Veículo';
$extra_js = '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>' . "\n"
          . '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>' . "\n"
          . '<script src="assets/js/editar.js"></script>';
include 'includes/header.php';
?>

<div class="box">
    <h1>Editar Veículo</h1>

    <?php if ($msg): ?>
        <div class="alert <?php echo $eh_sucesso ? 'alert-success' : 'alert-danger'; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $v['id']; ?>">

        <div class="form-group">
            <label>Placa</label>
            <input type="text" name="placa" class="form-control" value="<?php echo $v['placa']; ?>" required>
        </div>

        <div class="form-group">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" value="<?php echo $v['marca']; ?>" required>
        </div>

        <div class="form-group">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" value="<?php echo $v['modelo']; ?>" required>
        </div>

        <div class="form-group">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control" value="<?php echo $v['cor']; ?>" required>
        </div>

        <div class="form-group">
            <label>Ano de Fabricação</label>
            <input type="number" name="ano_fabricacao" class="form-control" value="<?php echo $v['ano_fabricacao']; ?>" required>
        </div>

        <div class="form-group">
            <label>Ano do Modelo</label>
            <input type="number" name="ano_modelo" class="form-control" value="<?php echo $v['ano_modelo']; ?>" required>
        </div>

        <div class="form-group">
            <label>Combustível</label>
            <select name="combustivel" class="form-control" required>
                <option value="Gasolina" <?php if($v['combustivel']==='Gasolina') echo 'selected'; ?>>Gasolina</option>
                <option value="Etanol" <?php if($v['combustivel']==='Etanol') echo 'selected'; ?>>Etanol</option>
                <option value="Diesel" <?php if($v['combustivel']==='Diesel') echo 'selected'; ?>>Diesel</option>
                <option value="Flex" <?php if($v['combustivel']==='Flex') echo 'selected'; ?>>Flex</option>
            </select>
        </div>

        <div class="form-group">
            <label>Chassi</label>
            <input type="text" name="chassi" class="form-control" value="<?php echo $v['chassi']; ?>" required>
        </div>

        <div class="form-group">
            <label>Renavam</label>
            <input type="text" name="renavam" class="form-control" value="<?php echo $v['renavam']; ?>" required>
        </div>

        <div class="form-group">
            <label>Quilometragem</label>
            <input type="number" name="quilometragem" class="form-control" value="<?php echo $v['quilometragem']; ?>" required>
        </div>

        <div class="form-group">
            <label>Observações</label>
            <textarea name="observacoes" class="form-control" rows="4" required><?php echo $v['observacoes']; ?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Atualizar Veículo</button>
    </form>

    <br>
    <a href="listagem.php" class="text-link">Voltar para listagem</a>
</div>

<?php include 'includes/footer.php'; ?>
