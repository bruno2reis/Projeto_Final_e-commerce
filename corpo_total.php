
<style type="text/css">

    .carousel .item{
        min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .carousel .item img{
        margin: 0 auto; /* Align slide image horizontally center */
    }
    .bs-example{
        margin: 20px;
    }
</style>

<<<<<<< HEAD


<section class="carousel slide" data-ride="carousel" id="pCarousel">
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            <div class="col-xs-12">
                <div class="card">
                    <div class="text-center">
                        <div class="card-img-top card-img-top-150">
                            <img class="thumb_prod" src="img/novalgina.png" alt="Novalgina">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="text-center">
                            <div class="card-img-top card-img-top-150">
                                <img class="thumb_prod" src="img/novalgina.png" alt="Novalgina">
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
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#pCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#pCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Promoções da semana -->
=======
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
>>>>>>> 97f393068aa34b9f9b265c83ed0a6fc0f0d83519
	
		<section class="container p-t-3">
			<div class="row">
				<div class="col-lg-12">
					<h1><span style="color: navy">Promoções da semana</span></h1>
				</div>
			</div>
		</section>
		
		<section class="carousel slide" data-ride="carousel" id="promoCarousel">
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
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#promoCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#promoCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
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
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#maisvendCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#maisvendCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
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

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#novidadesCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#novidadesCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
			</div>
			
		</section>


<<<<<<< HEAD


=======
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
>>>>>>> 97f393068aa34b9f9b265c83ed0a6fc0f0d83519
