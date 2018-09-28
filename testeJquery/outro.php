<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script>
$(function(){
  $("#btn_enviar").click(function() {
    //alert ("Parabéns, o código está funcionando.");
	var busca = $('#busca').val();
	var ordem = $('#ordem').val();
	$("#result").html("Buscando...");
	$.post("data.php", { busca: busca, ordem: ordem},function(data) {
		//alert(data);
	  $("#result").html(data);
	});
  });
});
</script>


	<fieldset>
		<input name="busca" type="text" id="busca" size="50" />
		<select name="ordem" id="ordem">
			<option value="id_cliente"> Código </option>
			<option value="nome"> Nome </option>
		</select>
		<button id="btn_enviar" type="submit">Iniciar Sessão</button>
	</fieldset>


<div id="result"></div>
