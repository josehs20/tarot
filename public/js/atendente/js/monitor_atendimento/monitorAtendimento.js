function update_situacao_atendente(status, id) {
    var span = document.querySelector('.spanSituacao');
    var background = status == 'online' ? '#008000' : status == 'offline' ? '#FF0000' : '#FF8C00'

    $.ajax({
        url: '/monitor-atendimento/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'PUT',
        data: {situacao:status},
        dataType: 'json',
        success: function (resp) {
          alertaSimples(resp.msg, 'success')
          span.innerText = status
          span.style.backgroundColor = background
        },
        error: function (resp) {
            alertaSimples('Não foi possível alterar o status tente novamente', 'error')
        }
    })
}