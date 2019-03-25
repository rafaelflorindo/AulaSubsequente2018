<?php
include("Noticia.php");

$listarNotice = new Noticia();
$listagem = $listarNotice->buscarTodos();
//var_dump($listagem);
?>	

<table border="1">
	<th>Item</th>
	<th>Título</th>
	<th>Descrição</th>
<?php
	foreach($listagem as $linha){
?>
<tr>
	<td><?=$linha["id"]?></td>
	<td>PHP</td>
	<td>Aula</td>
</tr>
<?php
}
?>
</table>