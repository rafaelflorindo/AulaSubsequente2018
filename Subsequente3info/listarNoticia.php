<?php
include("Noticia.php");

$listarNotice = new Noticia();
$situacao = filter_input(INPUT_GET, "situacao");
$listagem = $listarNotice->buscarTodos($situacao);
//var_dump($listagem);
?>	

<table border="1">
	<th>Item</th>
	<th>Título</th>
	<th>Descrição</th>
	<th>Ação</th>

<?php
	foreach($listagem as $linha){
?>
<tr>
	<td><?=$linha["id"]?></td>
	<td><?php echo $linha["titulo"]; ?></td>
	<td><?=$linha["descricao"]?></td>
	<td><a href=controllerAlterar.php?id=<?=$linha["id"]?>>[ ALTERAR ] </a>
		 <a href=controllerInativar.php?id=<?=$linha["id"]?>>[ INATIVAR ] </a></td>	
</tr>
<?php
}
?>
</table>