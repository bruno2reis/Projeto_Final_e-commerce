/* Scripts para o cadastro */

// Pegar o modal
	var modal = document.getElementById('id01');
	
// Fechar o modal quando o usuário clicar em qualquer lugar fora do popup
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}