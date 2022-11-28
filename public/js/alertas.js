
function alertaMessagem(msg,icon, text = '', button = false) {

    Swal.fire({
        position: 'top-end',
        icon: icon,
        title: msg,
        text: text,
        showConfirmButton: button,
        timer: 2500
      })
}
