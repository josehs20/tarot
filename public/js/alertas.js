
function alertaMessagem(msg, icon, text = '', button = false) {

  Swal.fire({
    position: 'top-end',
    icon: icon,
    title: msg,
    text: text,
    showConfirmButton: button,
    timer: 2500
  })
}

function alertaSimples(msg, icon, time = 3000) {
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: time,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: icon,
    title: msg
  })
}


