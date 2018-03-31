<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/cardslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/cadastro.css">
		<link rel="stylesheet" href="css/flickity.css" media="screen">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/carrosseis.css">
		
		<title>Home - Medcare</title>		
			
	</head>
	<body>
        <div class="container">
            <div class="form-row">
                <div class="col-lg-8">
                    <label><h4>Olá, visitante!</h4></label>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cadastro / Login</button>

                </div>
                <div class="col-lg-4">
                    <a href="" class="url">Atendimento</a> |
                    <a href="" class="url">Meus pedidos</a> |
                    <a href="" class="url">Meu perfil</a>
                </div>
            </div>
        </div>
    <?php require_once "nav.php"; ?>
	
	<!-- Popup de cadastro e login -->
	
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <!-- Botão de x para fechar o modal -->
	  <form class="modal-content" action="/action_page.php">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id='popup'>
						<!-- Nav tabs -->
						<ul class="nav nav-pills nav-justified">

						  <li class="nav-item">
							<a class="nav-link active" data-toggle="pill" href="#cadastro">Cadastro</a>
						  </li>
						  
						  <li class="nav-item">
							<a class="nav-link" data-toggle="pill" href="#login">Login</a>
						  </li>

						</ul>
					</div>
					
                    <!-- Cadastro -->
					
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="cadastro">
                          <label for="email">e-mail</label>
                          <input type="text" placeholder="Ex. joaodasilva@gmail.com" name="email" required>

                          <label for="psw">senha</label>
                          <input type="password" placeholder="" name="psw" required>

                          <label for="cpf">CPF</label>
                          <input type="number" placeholder="Ex. 123.456.789-12" name="cpf" required>

                          <label for="nome">seu nome</label>
                          <input type="text" placeholder="Ex. Leonardo" name="nome" required>

                          <label for="dtnasc">data de nascimento</label><br>
                          <input type="date" placeholder="Ex. 01/01/1999" name="dtnasc" required><br>

                          <label for="email">sexo</label><br>
                          <input type="radio" name="sexo" value="masc" checked>Masculino
                          <input type="radio" name="sexo" value="fem">Feminino<br><br>

                          <label for="tel">telefone</label>
                          <input type="number" placeholder="Ex. (99) 99999-9999" name="tel" required>


                          <div class="clearfix">
                            <div class="text-center">
                                <button type="submit" class="btn btn-default" style="background-color:rgb(38,95,167); width: 50%;color: white;">CRIAR CADASTRO</button><br>
                            </div>
                          </div>
                        </div>

                    <!-- Login -->
					
                     <div role="tabpanel" class="tab-pane" id="login">

                      <label for="email">e-mail</label>
                      <input type="text" placeholder="Ex. joaodasilva@gmail.com" name="email" required>

                      <label for="psw">senha</label>
                      <input type="password" placeholder="" name="psw" required>


                      <div class="clearfix">
                            <div class="text-center">
                                <button type="submit" class="btn btn-default" style="background-color: rgb(38,95,167); width: 50%; color: white;">ENTRAR</button>
                            </div>
                      </div>

                     </div>

                    </div>
				</div>
			</div>
		</div>
	  </form>
	</div>

		<?php require_once "corpo_total.php"; ?>

		<?php require_once "footer.php"; ?>
				
		<!-- Carregamento de arquivos JavaScript -->

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="js/flickity.pkgd.min.js"></script>

        <script>

            /* Scripts para o cadastro */
			
            // Pegar o modal
                var modal = document.getElementById('id01');
				
            // Fechar o modal quando o usuário clicar em qualquer lugar fora do popup
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
			
        </script>
	</body>
</html>