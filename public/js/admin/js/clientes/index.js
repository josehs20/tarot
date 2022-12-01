
"use strict";

function ativar_desativar_cliente(user, id, status) {

    console.log(status);
    if (status == 'Ativo') {
        Swal.fire({
            title: 'Deseja realmente desativar este cliente, ' + user + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                update_status_cliente('Desativado', id)

            }
        })
    } else {
        Swal.fire({
            title: 'Deseja realmente ativar este cliente, ' + user + ' ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sim',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                update_status_cliente('Ativo', id)

            }
        })
    }


}

function update_status_cliente(status, id) {

    $.ajax({
        url: '/update-status-cliente',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'PUT',
        data: { status: status, id: id },
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
    });

}