<?php
	//1 - conectar com o banco de dados
	include 'conexao.php';
	//2 - montar a string de consulta 
  	//2.1 - receber os dados
  	$nome = filter_input (INPUT_POST, "nome");
  	$sexo = filter_input (INPUT_POST, "sexo"); 
 	$telefone = filter_input (INPUT_POST, "telefone");
  	$email = filter_input (INPUT_POST, "email");
  	$dataNascimento = filter_input (INPUT_POST, "dataNascimento");
  	$ativo = filter_input (INPUT_POST, "ativo");
  
	echo $sql = "insert into cliente  
		(nome, sexo, telefone, email, dataNascimento, ativo) 
		values 
		('$nome', '$sexo', '$telefone', '$email', 
		$dataNascimento, $ativo)";	 	
	//3 - executar a query (consulta ao banco de dados)
	exit;
	$conectar -> query($sql);	
  
  	//4 - verificar se realmente gravou no banco
  	$numRegistro = $conectar->affected_rows;
  	if ($numRegistro == 1){
		echo "OK";
	}else{
    echo "ERRO"; 
  	}
	$conectar->close();
?>		
