<?php
//arquivo de conexao com o banco de dados
	$local = "localhost";//127.0.0.1
	$usuario = "root";
	$senha = "";
	$baseDados = "floriculturaRafael";
	/*depreciado versão do mysql 5
	mysql_connect($local, $usuario,$senha);
	mysql_select_db($baseDados);
	*/
	
	//mysqli orientada, funcina com a API do mysql 6
	//$conectar = mysqli_connect($local, $usuario,$senha,$baseDados);
	
	$conectar = new mysqli ($local, $usuario,$senha,$baseDados);
	
	//*************Realizando a validação da conexão com o banco de dados**************************
	/*A função mysqli_connect_errno() irá retornar o número do código de erro da ultima chamada a função mysqli_connect(). Se não houve erro, esta função irá retornar zero. 
	A função connect_error irá retornar uma string representando o ultimo erro que aconteceu com a ultima chamada a função mysqli_connect(). Se não houve erro, esta função irá retornar uma string vazia. 	
	*/
	if ($mysqli->connect_errno) { 
		echo "Houve um erro na tentativa de conexão com MySQL:
			Código do erro: (" . $mysqli->connect_errno . ") Motivo: " . $mysqli->connect_error;
	}
	echo "A sua conexão foi realizada com sucesso via " . $mysqli->host_info;
?>