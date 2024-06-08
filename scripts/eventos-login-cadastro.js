//codigo botao de login ou cadastro
'use strict'

        const loginContainer = document.getElementById('login-container')

        const moveOverlay = () => loginContainer.classList.toggle('move')

        document.getElementById('open-register').addEventListener('click', moveOverlay)
        document.getElementById('open-login').addEventListener('click', moveOverlay)

        document.getElementById('open-register-mobile').addEventListener('click', moveOverlay)
        document.getElementById('open-login-mobile').addEventListener('click', moveOverlay)

// Máscaras e restrições de caracteres
document.getElementById('nome').addEventListener('input', function (event) {
    // Remove caracteres que não são letras ou espaços
    this.value = this.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    }
);
// Máscaras usando o maskplugin
$('#datanascimento').mask('00/00/0000');
$('#cpf').mask('000.000.000-00');
$('#telefone').mask('(00) 00000-0000');