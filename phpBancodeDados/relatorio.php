<?php
	//1 - conectar com o banco de dados
	include 'conexao.php';//inclui o arquivo de conexão
	
	//2 - montar a query(string) de consulta 
	$sql = "select * from cliente where sexo='m' and ativo=1";
	 	
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
	?>
	<table border="1">
		<th>Item</th>	
		<th>Nome</th>
		<th>Sexo</th>
		<th>Telefone</th>
		<th>E-mail</th>
		<th>Data Nascimento</th>
		<th>Situação</th>
	
<?php
	foreach($dado as $linha){
		echo "<tr><td>$linha[codigoCliente]</td>";
		echo "<td>$linha[nome]</td>";
		echo "<td>$linha[sexo]</td>";				
		echo "<td>$linha[telefone]</td>";
		echo "<td>$linha[email]</td>";
		echo "<td>$linha[dataNascimento]</td>";
		echo "<td>"; 
			if ($linha["ativo"]==1) 
				echo "Sim"; 
			else 
				echo "Não";
		echo "</td>";
		echo "<tr />";	
	}	
?>	
</table>