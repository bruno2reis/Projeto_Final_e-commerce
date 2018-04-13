<?php
require_once "funcoescarrinho.php";
require_once "membros.php";
?>

<form action="finalizado.php" method="post" id="formCheckout">

	<div class="modal-content" style="margin-top: 35px">
		<div class="container">
			<div class="row">

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-0">
					<div class="text-center" style="margin: 0">
						<h3 style="margin: 15px"><span style="color: rgb(38,95,167)">Informações para entrega</span></h3>
					</div>
				</div>
		
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					</br>
					<label for="nomecli">Nome</label>
					<input type="text" id="nomecli" placeholder="Ex. João da Silva" name="nomecli" required>
					
					</br>
				</div>
				
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<label for="endcli">Endereço</label>
					<input type="text" id="endcli" placeholder="Ex. Rua das Flores, casa #1" name="endcli" required>
					</br>
				</div>
				  
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="cidadecli">Cidade</label>
					<input type="text" id="cidadecli" placeholder="Ex. Rio de Janeiro" name="cidadecli" required>
					</br>
				</div>

				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="estadocli">Estado</label>
					<input type="text" id="estadocli" placeholder="Ex. RJ" name="estadocli" required>
					</br>
				</div>
	  
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="cepcli">CEP</label>
					<input type="number" id="cepcli" placeholder="Ex. 11111-111" name="cepcli" required>
					</br>
				</div>
				
				<div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="paiscli">País</label>
					<input type="text" id="paiscli" placeholder="Ex. Brasil" name="paiscli" required>
					</br>
				</div>			

			</div>
		</div>
	</div>

	<div class="modal-content" style="margin-top: 35px">
		<div class="container">
			<div class="row">

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-0">
					<div class="text-center" style="margin: 0">
						<h3 style="margin: 15px"><span style="color: rgb(38,95,167)">Dados de pagamento</span></h3>
					</div>
				</div>
		
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					</br>
					<label for="numcartao">Número do cartão de crédito</label>
					<input type="number" id="numcartao" placeholder="Ex. 1111 2222 3333 4444" name="numcartao" required>
					</br>
				</div>
				
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<label for="nomecartao">Nome como está no cartão</label>
					<input type="text" id="nomecartao" placeholder="Ex. JOÃO DA SILVA" name="nomecartao" required>
					</br>
				</div>
				  
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="mescartao">Mês</label>
					<input type="number" id="mescartao" placeholder="Ex. 12" name="mescartao" required>
					</br>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="anocartao">Ano</label>
					<input type="number" id="anocartao" placeholder="Ex. 2025" name="anocartao" required>
					</br>
				</div>
	  
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 mt-0">
					<label for="cvvcartao">CVV</label>
					<input type="number" id="cvvcartao" placeholder="Ex. 111" name="cvvcartao" required>
					</br>
				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row text-center" style="margin: 0">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<input class="btn btn-outline-primary" id="checkout" type="submit" value="Submeter pedido" />
			</div>
		</div>
	</div>
</form>