<?php
// ============================================
// PAGINA INICIAL
// ============================================
$titulo = 'Início';
include 'includes/header.php';
?>

<!-- Banner Documentação -->
<div class="doc-banner">
    <div>
        <h3>Documentação Técnica Completa</h3>
        <p>Organograma, arquitetura, guia de instalacao, APIs e manual de uso.</p>
    </div>
    <a href="docs/documentacao.html" target="_blank" class="btn-light">Abrir Documentação</a>
</div>

<!-- Acesso Rapido -->
<h2 style="font-size:18px; margin-bottom:12px; border-left:4px solid #007bff; padding-left:10px;">Acesso Rapido</h2>
<div class="card-grid">
    <a href="cadastro.php" class="card verde">
        <div class="card-icone">📝</div>
        <h3>Cadastrar Veículo</h3>
        <p>Adicione um novo veiculo com todos os dados obrigatorios.</p>
    </a>
    <a href="listagem.php" class="card laranja">
        <div class="card-icone">📋</div>
        <h3>Listar Veículos</h3>
        <p>Visualize, edite e exclua veiculos com DataTables responsivo.</p>
    </a>
    <a href="api/dados_aleatorios.php" target="_blank" class="card roxo">
        <div class="card-icone">🎲</div>
        <h3>Dados Aleatorios</h3>
        <p>API que gera dados fake de veiculos para testes rapidos.</p>
    </a>
</div>

<!-- Sobre -->
<div class="box">
    <h1>Sobre o Projeto</h1>
    <p>
        Este sistema foi desenvolvido como parte do <strong>Desafio Profissional</strong> da disciplina de Desenvolvimento Web.
        O objetivo foi criar uma funcionalidade de cadastro de veiculos para um sistema comercial,
        atendendo a demanda de um cliente que precisa controlar sua frota.
    </p>
    <p>
        O projeto utiliza uma arquitetura <strong>cliente-servidor</strong> com comunicacao via <strong>JSON</strong> entre
        front-end e back-end. A listagem e dinamica, consumindo uma API PHP que retorna os dados do MySQL,
        e o JavaScript monta a tabela interativa com <strong>DataTables</strong>.
    </p>

    <h3>Funcionalidades Implementadas</h3>
    <ul class="list-check">
        <li>Cadastro completo de veiculos (insercao no banco)</li>
        <li>Listagem dinamica com busca, ordenacao e paginacao</li>
        <li>Edicao de veiculos cadastrados</li>
        <li>Exclusao com confirmacao via SweetAlert2</li>
        <li>Preenchimento automatico de dados aleatorios para testes</li>
        <li>API REST em JSON para integracao front-back</li>
        <li>Interface responsiva (funciona em celular e computador)</li>
        <li>Efeitos visuais de confete nas ações de sucesso</li>
    </ul>

    <h3>Tecnologias Utilizadas</h3>
    <div class="tag-list">
        <span class="tag">HTML5</span>
        <span class="tag">CSS3</span>
        <span class="tag">JavaScript</span>
        <span class="tag">jQuery</span>
        <span class="tag">PHP 8.x</span>
        <span class="tag">MySQL</span>
        <span class="tag">DataTables</span>
        <span class="tag">SweetAlert2</span>
        <span class="tag">JSON API</span>
        <span class="tag">XAMPP</span>
    </div>
</div>

<!-- Agradecimentos -->
<div class="thanks-box">
    <h3>Agradecimentos</h3>
    <p>
        Quero agradecer muito ao <strong>professor</strong> pelas aulas fantasticas e pelas dicas
        valiosas que me ajudaram a entender melhor como funciona o desenvolvimento web.
        As explicações sobre PHP, banco de dados e comunicacao entre front-end e back-end
        foram essenciais para que eu conseguisse desenvolver este projeto do inicio ao fim.
    </p>
    <p>
        Tambem agradeco pela paciencia e dedicacao em ensinar conceitos que pareciam
        dificeis no comeco, mas que com a didatica do professor ficaram muito mais claros.
        Este trabalho e o resultado de todo o aprendizado adquirido ao longo da disciplina.
    </p>
    <p><strong>Muito obrigado professor!</strong></p>
</div>

<?php include 'includes/footer.php'; ?>
