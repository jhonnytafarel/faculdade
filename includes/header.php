<?php
// ============================================
// HEADER PADRAO - Sistema de Cadastro de Veículos
// Fabrica de Software Jhonny Tafarel
// ============================================
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo . ' | ' : ''; ?>Sistema de Cadastro de Veículos</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <?php echo isset($extra_css) ? $extra_css : ''; ?>
</head>
<body>

    <header class="site-header">
        <div class="header-brand">
            <h1>Sistema de Cadastro de Veículos</h1>
            <span>Desenvolvido por Jhonny Tafarel | Dev Full Stack</span>
        </div>
        <nav class="header-nav">
            <?php
            $pagina_atual = basename($_SERVER['PHP_SELF']);
            $links = [
                'index.php' => 'Inicio',
                'cadastro.php' => 'Cadastrar',
                'listagem.php' => 'Listagem',
            ];
            foreach ($links as $arquivo => $nome) {
                $ativo = ($pagina_atual === $arquivo) ? ' class="ativo"' : '';
                echo '<a href="' . $arquivo . '"' . $ativo . '>' . $nome . '</a>';
            }
            ?>
        </nav>
    </header>

    <main class="site-content">
