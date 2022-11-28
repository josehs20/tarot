function ativarAtendente(user, id) {

   
    Swal.fire({
        title: 'Deseja realmente Ativar atendente, ' + user + ' ?',
        showCancelButton: true,
        confirmButtonText: 'Sim',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            update_status('Ativo', id)

        }
    })
}
function desativarAtendente(user, id) {

    Swal.fire({
        title: 'Deseja realmente desativar atendente, ' + user + ' ?',
        showCancelButton: true,
        confirmButtonText: 'Sim',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            update_status('Desativado', id)

        }
    })
}

function update_status(status, id) {
    $.ajax({
        url: '/update-status',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'PUT',
        data: { status: status, id: id },
        dataType: 'json',
        success: function (resp) {
            alertaMessagem(resp.msg, 'success')
            document.getElementById('statusUser'+id).innerText = status
        },
        error: function (resp) {
            alertaMessagem('Não foi possível tente novamente em alguns instantes', 'error')
        }
    });
}