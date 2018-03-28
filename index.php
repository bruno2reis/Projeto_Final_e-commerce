<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/cardslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/cadastro.css">
		<title>Index - Produtos</title>
		
		<style>
			/* Definir o tamanho do card dos produtos (novidades, promoções etc.) */
            .card {
				height: 299px;			
			}
			/* Fazer o botão ficar visível somente quando passamos o mouse no card */
			.card .buttoncart {
				visibility: hidden;
			}
			.card:hover .buttoncart {
				background-color: rgb(38,95,167);
				visibility: visible;
			}
            /*Justificar nav */
            .flex-fill {
            flex: 1 1 100%;
            }
		</style>
	</head>
	<body>
        <div class="container">
            <div class="form-row">
                <div class="col-7">
                    <label><h4>Olá Visitante</h4></label>
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cadastro / Login</button>

                </div>
                <div class="url">
                    <a href="" class="url">Atendimento</a> |
                    <a href="" class="url">Meus pedido</a> |
                    <a href="" class="url">Meu perfil</a>
                </div>
            </div>
        </div>
    <?php require_once "nav.php"; ?>
	<!-- Cadastro -->
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
                                <button type="submit" class="btn btn-default" style="background-color:rgb(38,95,167); width: 50%;color: white;">CRIAR CADASTRO</button><br>          <!-- Botão de x para fechar o modal -->
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script>
            /* Para fazer com que os carrosséis não se movimentem automaticamente */
            $('.carousel').carousel({
                pause: true,
                interval: false
            });
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
