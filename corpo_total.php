<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="css/cardslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>Index - Produtos</title>
		
		
		<!-- Estilização do popup de cadastro -->
		
		<style>
		
		body {font-family: Arial, Helvetica, sans-serif;}
		* {box-sizing: border-box}
		/* Full-width input fields */
		input[type=text], input[type=password], input[type=number], input[type=date] {
			width: 100%;
			padding: 0px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
		}

		/* Add a background color when the inputs get focus */
		input[type=text]:focus, input[type=password]:focus, input[type=number]:focus, input[type=date]:focus {
			background-color: #ddd;
			outline: none;
		}
		

		/* Set a style for all buttons */
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		}

		button:hover {
			opacity:1;
		}


		/* Float signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
		  float: left;
		  width: 50%;
		}

		/* Add padding to container elements */
		.container {
			padding: 16px;
		}

		/* The Modal (background) */
		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgba(92,92,92,0.75);
			padding-top: 50px;
		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			border: 1px solid #888;
			width: 80%; /* Percentual da tela que o popup ocupa */
		}

		/* Style the horizontal ruler */
		hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
		}
		 
		/* The Close Button (x) */
		.close {
			position: absolute;
			right: 35px;
			top: 15px;
			font-size: 40px;
			font-weight: bold;
			color: #f1f1f1;
		}

		.close:hover,
		.close:focus {
			color: #f44336;
			cursor: pointer;
		}

		/* Clear floats */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media screen and (max-width: 300px) {
			.cancelbtn, .signupbtn {
			   width: 100%;
			
			}	
		}	
			
		@media screen and (min-width: 700px) {

			.modal-content {
			width: 600px; /* Percentual da tela que o popup ocupa */
			}
		}   
			   
				
		</style>
		
	</head>
	
	<body>

	
	<!-- Cadastro -->
	
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cadastro</button>

	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>		<!-- Botão de x para fechar o modal -->
	  <form class="modal-content" action="/action_page.php">
		<div class="container">
		  <div class="text-center">
			<h1>Cadastre-se</h1>
		  </div>
		  
		  <hr>
		  <label for="email"><b>e-mail</b></label>
		  <input type="text" placeholder="Ex. joaodasilva@gmail.com" name="email" required>

		  <label for="psw"><b>senha</b></label>
		  <input type="password" placeholder="" name="psw" required>

		  <label for="cpf"><b>CPF</b></label>
		  <input type="number" placeholder="Ex. 123.456.789-12" name="cpf" required>	  

		  <label for="nome"><b>seu nome</b></label>
		  <input type="text" placeholder="Ex. Leonardo" name="nome" required>

		  <label for="dtnasc"><b>data de nascimento</b></label><br>
		  <input type="date" placeholder="Ex. 01/01/1999" name="dtnasc" required><br><br>

		  <label for="email"><b>sexo</b></label><br>
		  <input type="radio" name="sexo" value="masc" checked>Masculino
		  <input type="radio" name="sexo" value="fem">Feminino<br><br>		  
		  
		  <label for="tel"><b>telefone</b></label>
		  <input type="number" placeholder="Ex. (99) 99999-9999" name="tel" required>	  


		  <div class="clearfix">
				<div class="text-center">
					<button type="submit" class="btn btn-default" style="width: 50%">CRIAR CADASTRO</button><br>          <!-- Botão de x para fechar o modal -->
					<a href="">Sou cadastrado. Fazer login.</a>
				</div>
		  </div>
		</div>
	  </form>
	</div>

	
	
	<!-- Login -->
	
	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button>

	<div id="id02" class="modal">
	  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="/action_page.php">
		<div class="container">
		  <div class="text-center">
			<h1>Fazer login</h1>
		  </div>
		  
		  <hr>
		  <label for="email"><b>e-mail</b></label>
		  <input type="text" placeholder="Ex. joaodasilva@gmail.com" name="email" required>

		  <label for="psw"><b>senha</b></label>
		  <input type="password" placeholder="" name="psw" required>


		  <div class="clearfix">
				<div class="text-center">
					<button type="submit" class="btn btn-default" style="width: 50%">Entrar</button><br>
					<a href="">Não sou cadastrado. Fazer cadastro.</a>
					<p onclick="document.getElementById('id01')">Login</p>
				</div>
		  </div>
		</div>
	  </form>
	</div>
	
	
	
	
	
	
	
	<!-- Promoções da semana -->
	
		<section class="container p-t-3">
			<div class="row">
				<div class="col-lg-12">
					<h1><span style="color: navy">Promoções da semana</span></h1>
				</div>
			</div>
		</section>
		
		<section class="carousel slide" data-ride="carousel" id="promoCarousel">
		
			<div class="container">
				<div class="row">
				
					<div class="col-12 text-right mb-4">
						<a class="btn btn-outline-secondary prev" data-slide="prev" href="#promoCarousel" class="left carousel-control"><i class="fa fa-lg fa-chevron-left"></i></a>
						<a class="btn btn-outline-secondary next" data-slide="next" href="#promoCarousel" class="right carousel-control"><i class="fa fa-lg fa-chevron-right"></i></a>
					</div>
  
				</div>
			</div>
			
			
			<div class="container p-t-0 m-t-2 carousel-inner">
				<div class="row row-equal carousel-item active m-t-0">
				
				
				
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
							
					
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-4 col-xs-12">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="row row-equal carousel-item m-t-0">
				
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				
			</div>
			
		</section>




		<!-- Mais vendidos -->
	
		<br>     <!-- Provisório - mudar no CSS -->
		<br>     <!-- Provisório - mudar no CSS -->
		<section class="container p-t-3">
			<div class="row">
				<div class="col-lg-12">
					<h1><span style="color: navy">Mais vendidos</span></h1>
				</div>
			</div>
		</section>
		
		<section class="carousel slide" data-ride="carousel" id="maisvendCarousel">
		
			<div class="container">
				<div class="row">
				
					<div class="col-12 text-right mb-4">
						<a class="btn btn-outline-secondary prev" data-slide="prev" href="#maisvendCarousel" class="left carousel-control"><i class="fa fa-lg fa-chevron-left"></i></a>
						<a class="btn btn-outline-secondary next" data-slide="next" href="#maisvendCarousel" class="right carousel-control"><i class="fa fa-lg fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
			
			
			<div class="container p-t-0 m-t-2 carousel-inner">
				<div class="row row-equal carousel-item active m-t-0">
				
				
				
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
							
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="row row-equal carousel-item m-t-0">
				
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				
			</div>
			
		</section>	
		
		
		
		<!-- Novidades -->
	
		<br>     <!-- Provisório - mudar no CSS -->
		<br>     <!-- Provisório - mudar no CSS -->
		<section class="container p-t-3">
			<div class="row">
				<div class="col-lg-12">
					<h1><span style="color: navy">Novidades</span></h1>
				</div>
			</div>
		</section>
		
		<section class="carousel slide" data-ride="carousel" id="novidadesCarousel">
		
			<div class="container">
				<div class="row">
				
					<div class="col-12 text-right mb-4">
						<a class="btn btn-outline-secondary prev" data-slide="prev" href="#novidadesCarousel" class="left carousel-control"><i class="fa fa-lg fa-chevron-left"></i></a>
						<a class="btn btn-outline-secondary next" data-slide="next" href="#novidadesCarousel" class="right carousel-control"><i class="fa fa-lg fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
			
			
			<div class="container p-t-0 m-t-2 carousel-inner">
				<div class="row row-equal carousel-item active m-t-0">
				
				
				
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>


					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					

					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				
				<div class="row row-equal carousel-item m-t-0">
				
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-3">
						<div class="card">
							<div class="text-center">
								<div class="card-img-top card-img-top-150">
									<img class="thumb_prod" src="img/novalgina.png" width="150" alt="Novalgina">
								</div>
								<div class="card-block p-t-2">									
									<div class="card-title">Novalgina 1g 10 Comprimidos</div>
									<div class="card-subtitle mb-2 text-muted">Sanofi Aventis</div>
									<div class="card-text">R$ 15,00</div>								
									<br>
									<a href="#" class="btn btn-primary">Adicionar ao carrinho</a>    	
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
				
			</div>
			
		</section>
		
		
		<!-- Carregamento de arquivos JavaScript -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	

	<script>
			   
			$('.carousel').carousel({			/* Para fazer com que os carrosséis não se movimentem automaticamente */
				pause: true,
				interval: false
			});

			
			/* Scripts para o cadastro */
			
			// Get the modal
				var modal = document.getElementById('id01');
				var modal2 = document.getElementById('id02');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal || event.target == modal2) {
					modal.style.display = "none";
				}
			}
			
		</script>


	</body>
</html>
