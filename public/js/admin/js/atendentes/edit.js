"use strict";
$(document).ready(function () {
  $('input[name=comissao]').mask('##0,00', { reverse: true });
})

function validaFormUpdate() {
  var img = document.querySelector('[name="img"]');
  var senha = document.querySelector('[name="senha"]').value
  var confirmSenha = document.querySelector('[name="confirmSenha"]').value

  if (img.files.length) {
    var formato = img.files[0].name.split('.')[1]

    //valida imagem
    if (formato != 'jpg' && formato != 'png') {
      alertaMessagem('Formato de imagem inválido', 'error', 'Formatos permitidos, JPG ou PNG', true)
      return
    }
  }
  //valida senhas
  if (senha != confirmSenha) {
    Swal.fire({
      icon: 'error',
      title: 'Senhas não conferem',
    })
    return
  }

  if (senha.length && senha.length < 6) {
    Swal.fire({
      icon: 'error',
      title: 'Senha deve conter no mínimo 6 caracteres',
    })
    return
  }
  document.getElementById("formUpdateAtendente").submit();
}
