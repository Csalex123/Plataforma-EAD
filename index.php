<?php

session_start();

if(!isset($_SESSION['logged_in'])){
    $_SESSION['logged_in'] = false;
}

if($_SESSION['logged_in']){
    header('Location: aulas/');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlim Digital - A Brand New Horizon!</title>
    <link rel="icon" href="img/favicon.png" />

    <link rel="stylesheet" href="css/styles.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>

    <div style="margin-top: 5%;" class="valign-wrapper row login-box">
        <div class="col s10 pull-s1 m6 pull-m3 l4 pull-l4">
            <div class="card hoverable">
                <form id="form-login">
                    <div class="card-content">
                        <span class="card-title center">
                            <img src="img/logo-berlimDigital-home.png" alt="" width="140">
                        </span>
                        <div class="row">
                            <div class="input-field col s11">
                                <i class="material-icons prefix">person</i>
                                <input name="email" id="email" type="email" class="validate">
                                <label for="email">E-mail</label>
                                <p class="email-ic">E-mail incorreto</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s11">
                                <i class="material-icons prefix">vpn_key</i>
                                <input name="senha" id="password" type="password" class="validate">
                                <label for="password">Senha</label>
                                <p class="password-ic">Senha incorreta</p>
                            </div>
                        </div>

                        <div class="row">
                            <p class="msg"></p>
                        </div>

                        <div class="row">
                            <p class="right">
                                <a href="#forgotPassword" class="modal-trigger">Esqueci minha senha</a>
                            </p>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="waves-effect waves-light btn right">ENTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="forgotPassword" class="modal ">
        <form id="form-password">
            <div class="modal-content">
                <div class="center">
                    <img src="img/logo-berlimDigital-home.png" alt="" width="140">
                </div>
                <h5 class="center">Recuperação de conta</h5>

                <div class="row">
                    <p>Nos informe seu e-mail e nós enviaremos uma nova senha para você.</p>
                </div>

                <div class="loader-div">
                    <div>
                        <p>Recuperando</p>
                    </div>
                    <div class="loader"></div>
                </div>

                <div class="input-field col s11">
                    <i class="material-icons prefix">person</i>
                    <input name="email" id="email-2" type="email" class="validate">
                    <label for="email-2">E-mail</label>
                </div>

                <p class="msg-2"></p>

            </div>
            <div class="modal-footer">
                <div class="group-button">
                    <a href="#!" class="modal-close waves-effect waves-green  btn-small red">CANCELAR</a>
                    <button type="submit" class="recover waves-effect waves-light btn-small">Recuperar</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/recoverPassword.js"></script>
</body>

</html>