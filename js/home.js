$(document).ready(function () {
    $(".msg").hide();
  
    $("#form-login").submit(function (event) {
        event.preventDefault();

        email = $("#email").val();
        senha = $("#password").val();

        
        $.post("../curso/model/login.php", { email: email, senha: senha }, function (retorno) {
            if (retorno == "erro") {
                $(".msg").css("color","red");
                $(".msg").html("E-mail ou senha incorretos");
                $(".msg").show();
            } else if (retorno == "logado") {
                $(".msg").css("color","yellow");
                $(".msg").html("Já existe uma pessoa nesta conta.");
                $(".msg").show();
            } else {
                window.location = "../curso/aulas/index.php";
                $(".msg").hide();
            }
        });

    });

});

