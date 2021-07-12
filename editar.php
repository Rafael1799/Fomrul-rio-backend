<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fomulário de Edição</title>
</head>
<body>
	<h1>Formulário de Edição</h1>
	<?php
		include("conecta.php");
		$recid=$_GET["editaid"];
		$seleciona=mysqli_query($conexao, "select * from dados where id='$recid'");
		$campo=mysqli_fetch_array($seleciona);
	?>
	<form method= "post" action= "gravaedita.php">
		<input type="hidden" name="fid" value="<?=$campo["id"]?>">
		<input type="text" name="fnome" placeholder="NOME" value="<?=campo["nome"]?>"><br>
		<input type="text" name="femail" placeholder="EMAIL" value="<?=campo["email"]?>"><br>
		<textarea name="fmsg" rows="5" cols="46" placeholder="MENSAGEM"><?=$campo["msg"]?></textarea><br>
		<input type="submit" value="GRAVAR">
	</form>
</body>
</html>
