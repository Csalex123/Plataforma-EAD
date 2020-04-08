<?php

session_start();

if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = false;
}

if ($_SESSION['logged_in']) {
    header('Location: aulas/');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Berlim Digital - A Brand New Horizon!</title>

    <link rel="icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav>
            <div>
                <img height="70" src="img/img_0002.svg" alt="">
            </div>
            <div>
                <p>Aulas Online</p>
            </div>
        </nav>
    </header>


    <main>
        <div class="container-1">
            <img src="img/img_0001.png" alt="Berlim Digital">
        </div>

        <div class="container-2">

            <span>BEM-VINDO!</span>

            <p>Você está prestes a mergulhar dentro do universo de Treinamentos em Marketing Digital. Faça o seu login e983
                boas aulas!</p>

            <div class="container-form">
                <form id="form-login">
                    <p class="msg"></p>
                    <div class="group-inputs">
                        <input  require id="email"   type="email" placeholder="Email de acesso" >
                        <input  require  id="password" type="password" placeholder="Senha" >
                    </div>

                    <div class="group-button">
                        <a href="#open-modal"> Esqueci a senha</a>
                        <button type="submit">Entrar</button>
                    </div>
                </form>
            </div>
            <p>Você recebeu o acesso e senha no seu e-mail.</p>
        </div>
    </main>


    <form id="form-password">
        <div id="open-modal" class="modal-window">
            <div>
                <a href="#" title="Fechar modal" class="modal-close">Fechar</a>
                <h1>Nos informe seu e-mail</h1>

                <div class="loader-div">
                    <div>
                        <p>Recuperando</p>
                    </div>
                    <div class="loader"></div>
                </div>

                <p class="msg-2"></p>

                <div>
                    <input type="email" name="email" id="email-2" maxlength="100" placeholder="Email">
                    <button class="recover" type="submit">Recuperar</button>
                </div>
            </div>
        </div>
    </form>

    <footer>
        <div>
            <p>Berlim Digital - 2020. Todos os direitos Reservados.</p>
        </div>
        <div>
            <a href="">
                <p><i class="fab fa-whatsapp"></i> Fale Conosco</p>
            </a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/recoverPassword.js"></script>
</body>

</html>
