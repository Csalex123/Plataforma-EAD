<?php
include_once "CrudProfessor.class.php";
include_once "Professor.class.php";
/**
* 
*/
class Controller{

	
	
	public function __construct(){

	}



	public function listarProfessores(){

      $objCrud = new CrudProfessor();
      $retornoLista = $objCrud->listarProfessores();
      foreach ($retornoLista as $obj) {
        echo '<tr id="'.$obj->getId().'">';
                                               
            echo '<td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>';
            echo '<td>'.$obj->getNome().'</td>';
            echo '<td>'.$obj->getEmail().'</td>';
            if($obj->getLoginAtivo()== 0){
                echo '<td>Indisponível</td>';
            }else{
                echo '<td>Disponível</td>';
            }
        
            echo '<td>';
            echo '<div class="table-actions">';
            echo '<a href="#" onclick="editar('.$obj->getId().')" title="editar"><i class="ik ik-edit-2"></i></a>';
            echo '<a href="#" onclick="excluir('.$obj->getId().')" title="editar"><i class="ik ik-trash-2"></i></a>';
            echo '</div>';
          
            echo '</td>';
         echo '</tr>';


      }

	}	
	
}

?>