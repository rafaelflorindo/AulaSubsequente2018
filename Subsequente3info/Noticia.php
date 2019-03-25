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
	public $autor, $descricao, $titulo;
	
	public function setAutor($autor) {
		$this->autor = $autor;
	}
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
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
	public function excluir($id){
	}
	public function buscarUm($id){
	}
	public function buscarTodos(){
		
		$sql = "select * from noticia order by titulo asc";
		
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