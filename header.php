<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo_pagina) ? $titulo_pagina . ' - ' : ''; ?>Sistema de Cadastro de Veiculos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ===== HEADER PADRAO ===== */
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topo-dev {
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: #fff;
            padding: 22px 20px;
            text-align: center;
        }
        .topo-dev h1 {
            font-size: 26px;
            margin-bottom: 4px;
        }
        .topo-dev p {
            font-size: 13px;
            opacity: 0.9;
        }

        .menuzinho {
            background: #1a1a2e;
            text-align: center;
            overflow: hidden;
        }
        .menuzinho a {
            display: inline-block;
            color: #ccc;
            padding: 14px 24px;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
            border-bottom: 3px solid transparent;
        }
        .menuzinho a:hover {
            background: #16213e;
            color: #fff;
        }
        .menuzinho a.ativo {
            color: #fff;
            border-bottom-color: #007bff;
            font-weight: bold;
        }

        /* ===== CONTEUDO ===== */
        .content {
            flex: 1;
            max-width: 1100px;
            width: 100%;
            margin: 30px auto;
            padding: 0 20px;
        }

        .box {
            background: #fff;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        .box h1, .box h2 {
            color: #333;
            margin-bottom: 15px;
        }

        .box h1 {
            font-size: 22px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 8px;
        }

        .box h2 {
            font-size: 18px;
        }

        /* ===== FOOTER PADRAO ===== */
        .rodape-dev {
            background: #1a1a2e;
            color: #aaa;
            text-align: center;
            padding: 18px;
            font-size: 12px;
        }
        .rodape-dev a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

    <header>
        <div class="topo-dev">
            <h1>Sistema de Cadastro de Veiculos</h1>
            <p>Desenvolvido por Jhonny Tafarel | Dev Full Stack</p>
        </div>
        <nav class="menuzinho">
            <a href="index.php"<?php echo basename($_SERVER['PHP_SELF'])=='index.php'?' class="ativo"':''; ?>>Inicio</a>
            <a href="cadastro.php"<?php echo basename($_SERVER['PHP_SELF'])=='cadastro.php'?' class="ativo"':''; ?>>Cadastrar</a>
            <a href="listagem.php"<?php echo basename($_SERVER['PHP_SELF'])=='listagem.php'?' class="ativo"':''; ?>>Listagem</a>
        </nav>
    </header>

    <main class="content">
