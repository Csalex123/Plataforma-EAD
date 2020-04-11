<?php 
include_once "Login.class.php";

$objLogin = new Login();



$metodo = $_POST['metodo'];
$entidade = $_POST['entidade'];
$retorno="";

switch($entidade){
    case 'login':
        switch($metodo){
            case 'logar':
              $email = $_POST['email'];
              $senha = $_POST['senha'];
             
              $retorno = $objLogin->logar($email,$senha);
              
              if($retorno == 'erroSenha' ){
                echo "1";
              }else if($retorno == 'usuarioInexistente' ){
                echo "2";
              }else if($retorno == 'logado'){
                echo "3";
              }else if($retorno == 'loginEfetuado'){
                echo "4";
              }
              
              break;

        }

      break;
    case 'curso':
        switch($metodo){
          case 'cadastrar':
          break;
        }
}

?>