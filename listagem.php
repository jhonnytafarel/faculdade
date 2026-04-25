<?php
// ============================================
// PAGINA DE LISTAGEM
// ============================================
$titulo = 'Listagem de Veículos';
$extra_css = '<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">' . "\n"
           . '<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">';
$extra_js = '<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>' . "\n"
          . '<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>' . "\n"
          . '<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>' . "\n"
          . '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>' . "\n"
          . '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>' . "\n"
          . '<script src="assets/js/listagem.js"></script>';
include 'includes/header.php';
?>

<div class="box">
    <h1>Veículos Cadastrados</h1>

    <div style="margin-bottom:15px;">
        <a href="cadastro.php" class="btn btn-success">+ Cadastrar novo veiculo</a>
        <a href="index.php" class="btn btn-secondary">&larr; Voltar para Inicio</a>
    </div>

    <div class="table-wrap">
        <table id="tabela-veiculos" class="display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Ano Fab</th>
                    <th>Ano Mod</th>
                    <th>Combustivel</th>
                    <th>Quilom</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
