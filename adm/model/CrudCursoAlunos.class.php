<?php

include_once "Conexao.class.php";
include_once "Aluno.class.php";
include_once "Curso.class.php";
include_once "CursoAlunos.class.php";

/**
* 
*/
class CrudCursoAlunos extends Conexao{
	
	function __construct(){
      
    }
    
    public function listarAlunosPorCurso($id){
	
      try {
        $conn = $this->conectar();
        $sql = "SELECT cursoalunos.idCurso, cursoalunos.idAluno, aluno.email, aluno.nome as nomeAluno, aluno.loginAtivo from cursoalunos INNER JOIN aluno ON cursoalunos.idAluno = aluno.id INNER JOIN curso ON cursoalunos.idCurso = curso.id
        WHERE curso.id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $listaAlunosCurso = array();
              
          if ($stmt->execute()) {
             
              while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                  $objCursoAlunos = new CursoAlunos();
                  $objAluno = new Aluno();
                  $objAluno->setId($rs->idAluno);
                  $objAluno->setNome($rs->nomeAluno);
                  $objAluno->setEmail($rs->email);
                  $objAluno->setloginAtivo($rs->loginAtivo);
                  $objCurso = new Curso();
                  $objCurso->setId($rs->idCurso);
                  $objCursoAlunos->setObjCurso($objCurso);
                  $objCursoAlunos->setObjAluno($objAluno);
                  $listaAlunosCurso[]=$objCursoAlunos;
              }

          } else {
              echo "Erro: Não foi possível recuperar os dados do banco de dados";
          }

          return $listaAlunosCurso;

      } catch(PDOException $e) {
        
        echo 'Error: ' . $e->getMessage();
        return false;
      }

    }

   

   
   



}
    
    
    
    


	


?>