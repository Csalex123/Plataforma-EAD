<?php 
include_once "Login.class.php";
include_once "CrudCurso.class.php";
include_once "CrudProfessor.class.php";
include_once "Curso.class.php";
include_once "Professor.class.php";

$objLogin = new Login();
$objCrudCurso = new CrudCurso();
$objCrudProfessor = new CrudProfessor();
$objCurso = new Curso();


$metodo = $_POST['metodo'];
$entidade = $_POST['entidade'];
$retorno="";

switch($entidade){
    case 'login':
        switch($metodo){
            case 'logar':
              $email = $_POST['email'];
              $senha = $_POST['senha'];
             
              $retorno = $objLogin->logar($email,sha1($senha));
              
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
            $nome = $_POST['nome'];
            $img = $_POST['img'];
            $descricao = $_POST['descricao'];
            $hashtag = $_POST['hashtag'];


            //$retorno = $objCrudCurso->cadastrarCurso($nome,$img,$descricao,$hashtag);
            echo $retorno;
            break;

          case 'consultar':
            $id = $_POST['id'];
            $obj = $objCrudCurso->consultarCursoId($id);
            echo $obj->getNome();
            break;

          case 'listar':
            $id = $_POST['id'];
            $obj = $objCrudCurso->consultarCursoId($id);
            echo $obj->getNome();
            break;

          case 'editar':
            $nome = $_POST['nome'];
            $img = $_POST['img'];
            $descricao = $_POST['descricao'];
            $hashtag = $_POST['hashtag'];
            $id = $_POST['id'];


           // $retorno = $objCrudCurso->editarCurso($id,$nome,$img,$descricao,$hashtag);
            echo $retorno;
            break;

          case 'excluir':
            $id = $_POST['id'];
            $retorno = $objCrudCurso->exluirCurso($id);
            echo $retorno;
            break;


        }
    case 'professor':
      switch($metodo){
        case 'cadastrar':
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          
          $retorno = $objCrudProfessor->cadastrarProfessor($nome, $email);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;
        case 'editar':
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          
          $retorno = $objCrudProfessor->editarProfessor($id,$nome, $email);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;
        case 'excluir':
          $id = $_POST['id'];
          $retorno = $objCrudProfessor->exluirProfessor($id);
          if($retorno == true){
            echo "1";
          }else if($retorno == false){
            echo "2";
          }
          break;


        

      }
}

?>