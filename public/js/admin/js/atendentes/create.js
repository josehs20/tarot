"use strict";

function get_usuarios(nome) {
    $.ajax({
        url: '/get_usuarios',
        method: 'GET',
        data: { nome: nome ? nome : '' },
        dataType: 'json',
        success: function (resp) {
            localStorage.setItem('usuarios', JSON.stringify(resp));
        }
    });
}

get_usuarios();

function validateForm() {
    var usuarios = JSON.parse(localStorage.getItem('usuarios'))
    var img = document.querySelector('[name="img"]').files[0];
    var formato = img.name.split('.')[1]
    var dados = {
        nome: document.querySelector('[name="nome"]').value,
        email: document.querySelector('[name="email"]').value,
        user: document.querySelector('[name="usuario"]').value
    }
    var senha = document.querySelector('[name="senha"]').value
    var confirmSenha = document.querySelector('[name="confirmSenha"]').value

    //valida imagem
    if (formato != 'jpg' && formato != 'png') {
        Swal.fire({
            icon: 'error',
            title: 'Formato de imagem inválido',
            text: 'Formatos permitidos, JPG ou PNG',
        })
        return
    }
    // valida inuts name
    if (!valida_names_atendetes(usuarios, dados)) {
        return;
    }

    //valida senhas
    if (senha != confirmSenha) {
        Swal.fire({
            icon: 'error',
            title: 'Senhas não conferem',
        })
        return
    }

    if (senha.length < 6) {
        Swal.fire({
            icon: 'error',
            title: 'Senha deve conter no mínimo 6 caracteres',
        })
        return
    }

    document.getElementById("formCadastroAtendente").submit();

}

function valida_names_atendetes(usuarios, dados) {
    var valid = true


    for (let i = 0; i < usuarios.length; i++) {
        const element = usuarios[i];

        if (element.email == dados.email) {
            Swal.fire({
                icon: 'error',
                title: 'Email já existente',
            })
            valid = false
            break
        }
        if (element.name == dados.user) {
            Swal.fire({
                icon: 'error',
                title: 'Usuario já existente',
            })
            valid = false
            break
        }

        if (element.atendente && element.atendente.nome == dados.nome) {
            Swal.fire({
                icon: 'error',
                title: 'Nome já existente',
            })
            valid = false
            break
        }

    }
    console.log(valid);
    return valid;
}