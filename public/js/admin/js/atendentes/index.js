function ativarAtendente(user, id) {
    Swal.fire({
        title: 'Deseja realmente Ativar atendente, ' + user + ' ?',
        icon: 'warning',
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
        icon: 'warning',
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
        url: '/update-status-atendente',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'PUT',
        data: { status: status, id: id },
        dataType: 'json',
        success: function (resp) {
            alertaMessagem(resp.msg, 'success')
            document.getElementById('statusUser' + id).innerText = status
            if (status == 'Ativo') {
                document.getElementById('buttonAtivar' + id).classList.add('d-none')
                document.getElementById('buttonDesativar' + id).classList.remove('d-none')
            } else {
                document.getElementById('buttonAtivar' + id).classList.remove('d-none')
                document.getElementById('buttonDesativar' + id).classList.add('d-none')
            }
        },
        error: function (resp) {
            alertaMessagem('Não foi possível tente novamente em alguns instantes', 'error')
        }
    });
}
function delete_atendente(user, id) {

    Swal.fire({
        title: 'Deseja realmente excluir, ' + user + ' ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: '/atendentes/' + id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'DELETE',
                dataType: 'json',
                success: function (resp) {
                   alertaMessagem(resp.msg, 'success')
                   setTimeout(function() {
                    window.location.reload(true);
                  }, 2500)
                },
                error: function (resp) {
                    alertaMessagem('Não foi possível tente novamente em alguns instantes', 'error')
                }
            })
        }
    })
}