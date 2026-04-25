/* ============================================
   JS - PAGINA DE LISTAGEM
   ============================================ */

$(document).ready(function() {
    var tabela = $('#tabela-veiculos').DataTable({
        responsive: false,
        scrollX: true,
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json'
        },
        ajax: {
            url: 'api/listar.php',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'placa' },
            { data: 'marca' },
            { data: 'modelo' },
            { data: 'cor' },
            { data: 'ano_fabricacao' },
            { data: 'ano_modelo' },
            { data: 'combustivel' },
            { data: 'quilometragem' },
            { data: 'data_cadastro' },
            {
                data: 'id',
                orderable: false,
                className: 'dt-center',
                responsivePriority: 1,
                width: '120px',
                render: function(data) {
                    return '<button class="btn btn-warning btn-sm" onclick="editarVeiculo(' + data + ')">Editar</button>' +
                           '<button class="btn btn-danger btn-sm" onclick="deletarVeiculo(' + data + ')">Deletar</button>';
                }
            }
        ]
    });

    window.editarVeiculo = function(id) {
        window.location.href = 'editar.php?id=' + id;
    };

    window.deletarVeiculo = function(id) {
        Swal.fire({
            title: 'Tem certeza?',
            text: 'O veiculo sera removido permanentemente!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Sim, deletar!',
            cancelButtonText: 'Cancelar'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'api/deletar.php',
                    method: 'POST',
                    data: { id: id },
                    success: function(resp) {
                        var res = JSON.parse(resp);
                        if (res.sucesso) {
                            Swal.fire({
                                title: 'Deletado!',
                                text: 'Veiculo removido com sucesso.',
                                icon: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            });
                            confetti({
                                particleCount: 200,
                                spread: 80,
                                origin: { y: 0.6 },
                                colors: ['#ff0000', '#00ff00', '#0000ff']
                            });
                            tabela.ajax.reload();
                        } else {
                            Swal.fire('Erro!', res.mensagem || 'Erro ao deletar.', 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Erro!', 'Falha na comunicacao com o servidor.', 'error');
                    }
                });
            }
        });
    };
});
