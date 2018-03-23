<!doctype html>

<html lang="PT-br">

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" Content="IE-Edge">
		<meta charset="utf-8">
		<title>Medcare</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<style>

			.cartTitle {
				color: white;
				background-color: gray;
				
			}
			
			.page-header {
				padding-top: 20px;
			}
		
		</style>
		

		<!-- add Manifest Here -->
	</head>
	
	<body>
	
		<div class="container">
		  <div class="row">
		  
			<div class="col-lg-10 col-xs-12">
			  <div class="page-header">
				<h1>Meu carrinho</h1>
			  </div>
			</div>
			
			<div class="col-lg-1 col-xs-12">
				<div class="page-header">
					<button type="button" class="btn btn-primary">COMPRAR</button>
				</div>
			</div>
			
		  </div><!-- end .row -->
		</div><!-- end .container-fluid -->

		
		
				<div class="container" style="border-style: solid; border-color: gray">
				
					<!-- Linha dos títulos  -->
					

					<div class="cartTitle">
					
						<div class="row" style="background-color: gray">
							

								<div class="col-lg-4 col-md-4 col-xs-12">
										<p>Produto(s)</p>
								</div>

								<div class="col-lg-2 col-md-4 col-xs-12">
									<div class="text-center">
										<p>Quantidade</p>
									</div>
								</div>

								<div class="col-lg-2 col-md-4 col-xs-12">
									<div class="text-center">
										<p>Entrega</p>  	
									</div>
								</div>
								
								<div class="col-lg-2 col-md-4 col-xs-12">
									<div class="text-center">
										<p>Valor Unitário</p>  	
									</div>
								</div>

								<div class="col-lg-2 col-md-4 col-xs-12">
									<div class="text-center">
										<p>Valor Total</p>
									</div>
								</div>
						
						</div>
						
					</div>
				
					<!-- Linha de produto  -->
				
					<br>
					
					<div class="row">
					
						<div class="col-lg-2 col-md-4 col-xs-12">
							<img src="img/novalgina.png" width="150" alt="Novalgina">
						</div>

						<div class="col-lg-2 col-md-4 col-xs-12">
							<div class="text-center">
								<p>Novalgina 1g 10 Comprimidos</p>
								<p>SANOFI AVENTIS</p>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-xs-12">
							<div class="text-center">
								<p>1</p>
								<p>Retirar do carrinho<p>
							</div>
						</div>
						
						<div class="col-lg-2 col-md-4 col-xs-12">
							<div class="text-center">
								<p>R$ 5,90</p>  	
							</div>
						</div>					

						<div class="col-lg-2 col-md-4 col-xs-12">
							<div class="text-center">
								<p>R$ 15,00</p>  	
							</div>
						</div>
						
						<div class="col-lg-2 col-md-4 col-xs-12">
							<div class="text-center">
								<p><strong>R$ 15,00</strong></p>  	
							</div>
						</div>
						
					</div>
					
				
				</div>

				<br>
					
				<div class="container">
				
					<div class="row">
					
					<!-- Simular frete e prazo de entrega  -->
					
							<div class="col-lg-6 col-md-4 col-xs-12" style="border-style: solid; border-color: gray; padding: 20px">								
										<p>Simule o prazo de entrega e o frete para seu CEP abaixo:</p>

									<form action="">
										  <input type="text" name="CEP" value="Ex: 12345678">
										  <input type="submit" value="OK">
										  <a href="">Não sei meu CEP</a>
									</form>
									
							</div>

					
					<!-- Caixa com Totais -->
					
				
							<div class="col-lg-6 col-md-4 col-xs-12" style="background-color: lightgray; padding: 20px">

										<p>1 produto:</p>
										<p>Frete(?):</p>
										<p><strong>Total:</strong></p>
									
							</div>

					</div>
					
				</div>
				
				<div class="container">
				
					<div class="row" style="padding-top: 20px;">
					
							<div class="col-lg-10 col-md-4 col-xs-12">
								<button type="button" class="btn btn-primary">ESCOLHER MAIS PRODUTOS</button>
							</div>
				
							<div class="col-lg-1 col-md-4 col-xs-12">
								<button type="button" class="btn btn-primary">COMPRAR</button>
							</div>
				
				
				</div>

	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
	
	</body>

</html>

