$(document).ready(function () {
    $('.modal').modal();
    $(".msg").hide();
    $(".email-ic").hide();
    $(".password-ic").hide();


    $("#form-login").submit(function (event) {

        event.preventDefault();

        email = $("#email").val();
        senha = $("#password").val();


        if (email.length <= 0) {
            $(".email-ic").show();
        } else {
            $(".email-ic").hide();
        }

        if (senha.length <= 0) {
            $(".password-ic").show();
        } else {
            $(".passoword-ic").hide();
        }

        $.post("../curso/model/login.php", { email: email, senha: senha }, function (retorno) {
            if (retorno == "erro") {
                $(".msg").html("E-mail ou senha incorretos");
                $(".msg").show();
            } else if (retorno == "logado") {
                $(".msg").html("Já existe uma pessoa nesta conta.");
                $(".msg").show();
            } else {
                window.location = "../curso/aulas/index.php";
                $(".msg").hide();
            }
        });

    });

});

