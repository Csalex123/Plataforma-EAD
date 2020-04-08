$(document).ready(function(){
    $(".msg-2").hide();   
    $('.loader-div').hide();
    
    $("#form-password").submit(function (event) {
        event.preventDefault();   
        $('.loader-div').show();
        $(".recover").prop('disabled', true);

        email = $("#email-2").val();

        
        $.post("../curso/model/recoverPassword.php", {email: email}, function(retorno) {
             if(retorno){
                $('.loader-div').hide();
                $(".msg-2").show();   
                $(".msg-2").css("color","green");
                $(".msg-2").html("Uma nova senha foi enviada ao seu e-mail.");
            }else{
                $('.loader-div').hide();
                $(".msg-2").show();
                $(".msg-2").css("color","red");
                $(".msg-2").html("E-mail inválido.");
                $(".recover").prop('disabled', false);
            }
        });

    });
  
});