<?php
	//1 - conectar com o banco de dados
	include 'conexao.php';//inclui o arquivo de conexão
	
	//2 - montar a query(string) de consulta 
	$sql = "select * from cliente";
	 	
	//3 - executar a query
	$listar = $conectar -> query($sql);	
	
	/*4 - associar o conteudo da execução da query 
	em um array,	utilizando o laço de repetição que
	percorrerá a todos os registros que ele encontrar
	na tabela colocando cada linha em uma posição do 
	array.*/
	while($relatorio = $listar->fetch_assoc()){
		$dado[] = $relatorio;
	}
	//var_dump($dado);
	
	foreach($dado as $linha){
		echo "Código: $linha[codigoCliente]";
		echo "<br />Nome: $linha[nome]";
		echo "<br />Sexo: " . $linha["sexo"];				
		echo "<br />Telefone: " . $linha["telefone"];
		echo "<br />E-mail: " . $linha["email"];
		echo "<br />Data Nascimento: " . $linha["dataNascimento"];
		echo "<br />Situação: " . $linha["ativo"];
		echo "<hr />";	
	}	
?>	
