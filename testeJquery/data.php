<?php

//inclui conexao com o banco
$conectar = new mysqli ("localhost","root","","mapa");

//pega post com dados da busca

$busca = $_POST['busca'];
$order = $_POST['ordem'];

//query buscando nome

$sql = $conectar->query("SELECT * FROM usuario");// WHERE nome LIKE '%".$busca."%' or id_cliente LIKE '%".$busca."%' ORDER BY '%".$order."%'");

$numRegistros = $sql->num_rows;

if ($numRegistros != 0) {

// Exibe os registros e seus respectivos itens

while ($l = $sql->fetch_assoc) {

$id = $l["id_cliente"];

$cliente = $l["nome"];

$cor = "#F4F4F4";

if (($i % 2) == 1){ $fundo="#EEE"; }else{ $fundo="white"; }

$i++;

echo "

<table width='100%'>

<tr>

 

<td bgcolor=$fundo id='tamq16' width='9%'><div align=center valign=top> </div>$id</td>

 

<td bgcolor=$fundo width='75%'>

 

<a href='javascript:void(0)' onclick='fecha($id)'> $cliente</a> </td>

<td bgcolor=$fundo>

 

<a href='javascript:void(0)' onclick='fecha($id)'>Visualizar</a> </td>

 

 

 

 

</tr></table>\n";

}

// Se não houver registros

} else {

echo "<table><tr>

 

<td>Nenhum Cliente ou Código encontrado com a palavra '$palavra'</td>

 

 

 

</tr></table>\n";

 

 

}echo "<table width='100%' align='center' bgcolor='#000'><tr>

<td align='center'>Registros Encontrados: " . $sql->num_rows . "</td>

</tr></table>";

 

?>