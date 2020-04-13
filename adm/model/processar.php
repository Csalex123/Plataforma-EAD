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
          case 'cadastrar-curso':

              $nome = $_POST['nome'];
              $img = $_FILES["img"]["tmp_name"];
              $descricao = $_POST['descricao'];
              $hashtag = $_POST['tags'];
              $idProfessor = $_POST['idProfessor'];
              
              if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
                  $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
                  $nomeImg = $_FILES[ 'img' ][ 'name' ];
              
                  // Pega a extensão
                  $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
              
                  // Converte a extensão para minúsculo
                  $extensao = strtolower ( $extensao );
                  if ( strstr ( '.jpg;.jpeg;.png', $extensao ) ) {
                      // Cria um nome único para esta imagem
                      // Evita que duplique as imagens no servidor.
                      // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                      $novoNome = uniqid ( rand ()) . '.' . $extensao;
                                      
                      // Concatena a pasta com o nome
                      $destino = '../img/cursos/' . $novoNome;
                      $retorno = $objCrudCurso->cadastrarCurso($nome,$novoNome,$hashtag,$descricao,$idProfessor);
                      if($retorno == true){
                        // tenta mover o arquivo para o destino
                          if (!@move_uploaded_file($arquivo_tmp, $destino)){
                            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';

                          }else{
                            echo '1';
                          }
                          

                      }

                  }else{               
                    echo "2"; // erro de extensao;
                  } 
              // fim imagem escolhida
              }else{
                  $retorno = $objCrudCurso->cadastrarCurso($nome,$img,$hashtag,$descricao,$idProfessor);
                  if($retorno == true){
                  
                    echo '1';

                  }else{
                    echo '2';
                  }
              }
            
              break;

         
          
          case 'editar-curso':

              $id = $_POST['idCurso'];
              $nome = $_POST['nome'];
              $img = $_FILES["img"]["tmp_name"];
              $imgTemp = $_POST['img-temp'];
              $descricao = $_POST['descricao'];
              $hashtag = $_POST['tags'];
              $idProfessor = $_POST['idProfessor'];
              if($img == ""){
                  $retorno2 = $objCrudCurso->editarCurso($id,$nome,$imgTemp,$hashtag,$descricao,$idProfessor);
                  if($retorno2 == true){
                    echo "1";
                  }else{
                    echo "2";
                  }
                
              }else{

                if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 ) {
                    $arquivo_tmp = $_FILES[ 'img' ][ 'tmp_name' ];
                    $nomeImg = $_FILES[ 'img' ][ 'name' ];
                    // Pega a extensão
                    $extensao = pathinfo ( $nomeImg, PATHINFO_EXTENSION );
              
                    // Converte a extensão para minúsculo
                    $extensao = strtolower ( $extensao );
                    if ( strstr ( '.jpg;.jpeg;.png', $extensao ) ) {
                        // Cria um nome único para esta imagem
                        // Evita que duplique as imagens no servidor.
                        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                        $novoNome = uniqid ( rand ()) . '.' . $extensao;
                                        
                        // Concatena a pasta com o nome
                        $destino = '../img/cursos/' . $novoNome;
                        $remover = '../img/cursos/' . $imgTemp;
                        
                        
                        //$retorno3 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                        if( file_exists( $remover ) ){
                          unlink( $remover );
                          $retorno3 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                          if($retorno3 == true){
                              // tenta mover o arquivo para o destino
                              if (!@move_uploaded_file($arquivo_tmp, $destino)){
                                  echo "3";
      
                              }
                              echo "1";
                              
                              
                          }else{
                              echo "2";
                          }
                        }else{
                          $retorno3 = $objCrudCurso->editarCurso($id,$nome,$novoNome,$hashtag,$descricao,$idProfessor);
                          if($retorno3 == true){
                              // tenta mover o arquivo para o destino
                              if (!@move_uploaded_file($arquivo_tmp, $destino)){
                                  echo '3';
      
                              }
                              echo '1';
                              
                              
                          }else{
                              echo '2';
                          }

                        }
                        
                        
                    }
                   

                }

                 
              }
              break;

          case 'excluir-curso':
            $id = $_POST['id'];
            $img = $_POST['img'];
            $retornoExcluir = $objCrudCurso->exluirCurso($id);
           
            if($retornoExcluir == true){
              if( file_exists( $img ) ){
                unlink($img);
              }
              echo "1";
            }else if($retornoExcluir == false){
              echo "2";
            }
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