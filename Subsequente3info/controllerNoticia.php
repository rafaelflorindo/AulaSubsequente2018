<?php
if(filter_input(INPUT_POST, "titulo") 
		&& filter_input(INPUT_POST, "autor") 
		&& filter_input(INPUT_POST, "descricao")
	) {
	$titulo = filter_input(INPUT_POST, "titulo");
	$autor = filter_input(INPUT_POST, "autor");
	$descricao = filter_input(INPUT_POST, "descricao");
	
	$dados = array($autor, $descricao, $titulo);
	
	include_once("Noticia.php");
	$notice = new Noticia();

	$retorno = $notice->cadastrar($dados);
	
	if ($retorno == 1){
		echo "Registro gravado com sucesso!!!";
	}else{
		echo "Erro ao gravar o registro!!!";	
	}
}else{
	echo "Campos não foram preenchido";
}	
?>