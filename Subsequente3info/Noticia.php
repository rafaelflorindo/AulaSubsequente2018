<?php
class Noticia{
	public $autor, $descricao, $titulo;

	public function cadastrar($dados){
		list($autor, $descricao, $titulo) = $dados;

		$this->autor = $autor;
		$this->titulo = $titulo;
		$this->descricao = $descricao;				

		echo "<hr>Título = ". $this->titulo;
		echo "<br>Autor = ". $this->autor;
		echo "<br>Descrição = ". $this->descricao;
		echo "<hr>";
	}
	public function alterar($dados){
	}
	public function excluir($id){
	}
	public function buscarUm($id){
	}
	public function buscarTodos(){
	}
}
?>