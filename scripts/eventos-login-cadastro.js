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

//Validação do formulário
$(document).ready(function() {
    $("#formulario-cadastro").validate({
      rules: {
        nome: {
          required: true,
          minlength: 3
        },
        cpf: {
          required: true,
          minlength: 11
        },
        email: {
          required: true,
          email: true
        },
        telefone: {
          required: true,
          minlength: 11
        },
        dataNascimento: {
          required: true,
          dateISO: true,
          minlength: 8
        },
        senha: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        nome: {
          required: "Informe seu nome completo",
          minlength: "O nome deve ter pelo menos 3 caracteres"
        },
        cpf: {
          required: "Informe seu CPF",
          digits: "O CPF deve conter apenas números",
          minlength: "Informe seu CPF completo"
        },
        email: {
          required: "Informe seu email",
          email: "Informe um email válido"
        },
        telefone: {
          required: "Informe seu telefone",
          minlength: "Informe seu telefone completo"
        },
        datanascimento: {
          required: "Informe sua data de nascimento",
          dateISO: "Informe a data no formato DD/MM/AAAA"
        },
        senha: {
          required: "Informe sua senha",
          minlength: "A senha deve ter pelo menos 8 caracteres"
        }
      }
    });
  });