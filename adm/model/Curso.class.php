<?php 
class Curso{

	private $id;
	private $nome;
	private $img;
	private $descricao;
	private $hashtag;


    public function __construct(){
      $this->id = " ";
      $this->nome = " ";
      $this->img = " ";
      $this->descricao = " ";
      $this->hashtag = " ";

    }
    
    
   
    //get e set
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getImg(){
		return $this->img;
	}

	public function setImg($img){
		$this->img = $img;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getHashtag(){
		return $this->hashtag;
	}

	public function setHashtag($hashtag){
		$this->hashtag = $hashtag;
	}


}

?>