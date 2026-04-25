/* ============================================
   JS - PAGINA DE EDICAO
   ============================================ */

// confete ao atualizar com sucesso
(function() {
    var alertBox = document.querySelector('.alert-success');
    if (alertBox) {
        Swal.fire({
            title: 'Sucesso!',
            text: alertBox.textContent.trim(),
            icon: 'success',
            timer: 2500,
            showConfirmButton: false
        });
        confetti({ particleCount: 200, spread: 80, origin: { y: 0.6 } });
    }
})();
