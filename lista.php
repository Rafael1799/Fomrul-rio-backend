<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Dados - PHP</title>
<script type="text/jscript" src="script.js"></script>
</head>
<body>
	<h1>Lista de Dados - PHP</h1>
	<table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
		<tr>
			<td><strong>NOME</strong></td>
			<td><strong>EMAIL</strong></td>
			<td><strong>MENSAGEM</strong></td>
			<td width="10"><strong>ALTERAR</strong></td>
			<td width="10"><strong>EXCLUIR</strong></td>
		</tr>
		<?php
			include("conecta.php");
			$seleciona=mysqli_query($conexao, "select * from dados order by id desc");
			while($campo=mysqli_fetch_array($seleciona)){?>
				<tr>
					<td><?=$campo["nome"]?></td>
					<td><?=$campo["email"]?></td>
					<td><?=$campo["msg"]?></td>
					<td align="center"><a href="editar.php?editaid=<?=$campo['id']?>"><i>Editar</i></a></td>
					<td align="center"><a href="#" onClick="verifica(<?=$campo['id']?>)"><i>Excluir</i></a></td>
				</tr>
			<?php }?>		
	</table>
</body>
</html>
