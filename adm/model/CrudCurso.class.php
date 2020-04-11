<?php

include_once "Conexao.class.php";
include_once "Curso.class.php";

/**
* 
*/
class CrudCurso extends Conexao{
	
	function __construct(){
      
    }
    
    public function cadastrarCurso($objCurso){
	
		try {
			$conn = $this->conectar();
			$sql = "INSERT INTO curso (nome, img, hashtag,descricao) VALUES (?, ?, ?, ?)";
			$stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $objCurso->getNome());
            $stmt->bindParam(2, $objCurso->getImg());
            $stmt->bindParam(3, $objCurso->getHashtag());
            $stmt->bindParam(4, $objCurso->getDescricao());

             
            if ($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                   return true;
                
                } else {
                   return false;
                }
            } else {
                   throw new PDOException("Erro: Não foi possível executar a declaração sql");
                   return false;
            }
		} catch(PDOException $e) {
			return false;
			echo 'Error: ' . $e->getMessage();
		}
	}

	
}

?>