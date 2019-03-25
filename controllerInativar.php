<?php
if(filter_input(INPUT_GET, "id")) {
	$id = filter_input(INPUT_GET, "id");
	
	$dados = array($id);
	
	include_once("Noticia.php");
	$notice = new Noticia();

	$retorno = $notice->inativar($dados);
	
	if ($retorno == 1){
		echo "Registro foi inativado com sucesso!!!";
	}else{
		echo "Erro ao inativar o registro!!!";	
	}
}else{
	echo "Chave inválida";
}	
?>