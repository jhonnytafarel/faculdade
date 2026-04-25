/* ============================================
   JS - PAGINA DE CADASTRO
   ============================================ */

// Swal + confetti quando houver alerta de sucesso
document.addEventListener('DOMContentLoaded', function() {
    var alertSucesso = document.querySelector('.alert-success');
    if (alertSucesso) {
        Swal.fire({
            title: 'Sucesso!',
            text: alertSucesso.textContent.trim(),
            icon: 'success',
            timer: 2500,
            showConfirmButton: false
        });
        confetti({ particleCount: 200, spread: 80, origin: { y: 0.6 } });
    }
});

// preenche o formulario com dados aleatorios da API
document.getElementById('btn-aleatorio').addEventListener('click', function() {
    fetch('api/dados_aleatorios.php')
        .then(function(resp) { return resp.json(); })
        .then(function(d) {
            document.querySelector('[name="placa"]').value = d.placa;
            document.querySelector('[name="marca"]').value = d.marca;
            document.querySelector('[name="modelo"]').value = d.modelo;
            document.querySelector('[name="cor"]').value = d.cor;
            document.querySelector('[name="ano_fabricacao"]').value = d.ano_fabricacao;
            document.querySelector('[name="ano_modelo"]').value = d.ano_modelo;
            document.querySelector('[name="combustivel"]').value = d.combustivel;
            document.querySelector('[name="chassi"]').value = d.chassi;
            document.querySelector('[name="renavam"]').value = d.renavam;
            document.querySelector('[name="quilometragem"]').value = d.quilometragem;
            document.querySelector('[name="observacoes"]').value = d.observacoes;
        })
        .catch(function() {
            alert('Erro ao buscar dados aleatorios');
        });
});
