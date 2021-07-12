// Função em JavaScript
function verifica(recid){
	if(confirm("Deseja mesmo excluir esse registro?")){
		window.location="excluir.php?idexc=" + recid
	}
}
