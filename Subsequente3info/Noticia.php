<?php

/*
Próxima aula:
Método construtor com os dados de conexão
Método alterar
Método listarTudo
Método listarUm
Método inativar
Método ativar
*/

class Noticia{
	public $id, $autor, $descricao, $titulo;
	
	public function setAutor($autor) {
		$this->autor = $autor;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function getAutor(){
		return $this->autor;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	
	
	public function cadastrar($dados){
		list($autor, $descricao, $titulo) = $dados;

		$this->setAutor($autor);
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);				

		echo "<hr>Título = ". $this->getTitulo();
		echo "<br>Autor = ". $this->getAutor();
		echo "<br>Descrição = ". $this->getDescricao();
		echo "<hr>";
		
		
		$sql = "insert into noticia (titulo, autor, descricao) values 
		('{$this->getTitulo()}', '{$this->getAutor()}',
		'{$this->getDescricao()}')";
			
		$conectar = new mysqli(
		"localhost","root", "", "basenoticia");
		
		$inserir = $conectar->query($sql);

		$numRegistro = $conectar->affected_rows;
		
		if($numRegistro == 1){
			return 1;	
		}else {
			return 0;
		}
	}
	public function alterar($dados){
	}
	public function inativar($dados){
		list($id) = $dados;
		$this->setId($id);
		
		$sql = "update noticia set ativo=0 where id =" . $this->getId();
		
		$listar = new mysqli("localhost", "root", "", "basenoticia");
		$registro = $listar->query($sql);
		$numRegistro = $listar->affected_rows;
		
		if($numRegistro == 1){
			return 1;	
		}else {
				return 0;
		}
	}
	public function buscarUm($id){
	}
	public function buscarTodos($situacao){
		
		$sql = "select * from noticia where ativo = " . $situacao . " order by titulo asc";
		
		$listar = new mysqli("localhost", "root", "", "basenoticia");
		$registro = $listar->query($sql);
		
		$dados = array();
		while($linha = $registro->fetch_array()){
			$dados[] = $linha;
		}	
		//print_r($dados);
		return $dados;	
	}
}
?>	