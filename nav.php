<!-- Popup de cadastro e login -->

<div id="id01" class="modal">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	<!-- Botão de x para fechar o modal -->
  <form class="modal-content" action="" id="myForm">
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
					<div role="tabpanel" class="tab-pane active" id="formulario">
					  <label for="email">e-mail</label>
					  <input type="text" id="email" placeholder="Ex. joaodasilva@gmail.com" name="email">
					</br>
					  <label for="psw">senha</label>
					  <input type="password" id="senha" placeholder="" name="psw">
					
					  <label for="cpf">CPF</label>
					  <input type="number" id="cpf" placeholder="Ex. 123.456.789-12" name="cpf">

					  <label for="nome">seu nome</label>
					  <input type="text" id="nome" placeholder="Ex. Leonardo" name="nome">

					  <label for="dtnasc">data de nascimento</label><br>
					  <input type="date" id="dtnasc" placeholder="Ex. 01/01/1999" name="dtnasc"><br>

					  <label for="sexo">sexo</label><br>
					  <input type="radio" name="sexo" value="masc" checked>Masculino
					  <input type="radio" name="sexo" value="fem">Feminino<br><br>

					  <label for="tel">telefone</label>
					  <input type="number" id="tel" placeholder="Ex. (99) 99999-9999" name="tel">

					  <div class="clearfix">
						<div class="text-center">
							<input type="button" id="salvar" class="btn btn-default" value="CRIAR CADASTRO" style="background-color:rgb(38,95,167); width: 50%;color: white;"><br>
						</div>
					  </div>
					  <div id="mensagem_erro"></div>
					  <div id="insere_aqui"></div>
					</div>

				<!-- Login -->
			
				 <div role="tabpanel" class="tab-pane" id="login">
				  <label for="email">e-mail</label>
				  <input type="text" placeholder="Ex. joaodasilva@gmail.com" name="email" id="email2">

				  <label for="psw">senha</label>
				  <input type="password" placeholder="" name="psw" id="senha2">



				  <div class="clearfix">
						<div class="text-center">
							<input type="button" id="salvar2" class="btn btn-default" value="CRIAR CADASTRO" style="background-color:rgb(38,95,167); width: 50%;color: white;"><br>
						</div>
				  </div>

				 </div>
				</div>
			</div>
		</div>
	</div>
  </form>
</div>


<!-- Logo, barra de buscas e botão para buscar -->

<div class="container">

    <div class="form-group row" style="margin-top: 15px">
		
		<!-- Logo -->
		
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">	<!-- No Bootstrap 4 col-* é o mesmo que col-xs-* -->
            <a href="index.php" class="url"><img id="iconeLogo" class="mx-auto d-block" src="img/med1.png" height= 80px></a>			<!-- Inserir e centralizar a imagem no bloco -->
        </div>
		
        <div class="col-xl-10 col-lg-9 col-md-9 col-sm-12 col-12">	<!-- No Bootstrap 4 col-* é o mesmo que col-xs-*  class="mx-auto d-block" -->

			<div class="form-group row">
		
				<!-- Olá, visitante! Cadastro/login -->
				
				<div class="col-xl-6 col-lg-6 col-md-8 d-none d-md-block">
					<label><h4>Olá, visitante!</h4></label>
						<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Cadastro / Login</button>
				</div>
				
				<!-- Atendimento, meus pedidos, meu perfil e carrinho -->
				
				<div class="col-xl-6 col-lg-6 col-md-8 d-none d-lg-block text-right">
					<a href="" class="url">Atendimento</a> |
					<a href="" class="url">Meus pedidos</a> |
					<a href="" class="url">Meu perfil</a> |
					<a href="carrinho.php"><img src="img/shoppingcart.png" height="18px"/></a>		
				</div>

				<!-- Barra de buscas -->

				
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-11 col-11 mx-auto">

					<div class="input-group">	<!-- Utilizamos input group para colocar o input e o botão na mesma linha -->
						<input class="form-control" id="divBusca" type="text" style="margin-right: 25px">
						<input class="btn btn-primary" id="divBusca" type="button" value="Buscar">
					</div>
					
				</div>
				
			</div>

		</div>
		
	</div>
	
</div>


<!-- Nav -->

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgb(38,95,167)">    <!-- style="background-color: red"  -->

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapse_target">
	
		<ul class="navbar-nav" style="float: none; margin: 0 auto">
			<li class="nav-item">
				<a class="nav-link" href="medicamentos.php" style="padding-right: 70px; color: white">Medicamentos</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="beleza.php" style="padding-right: 70px; color: white">Beleza</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="infantil.php" style="padding-right: 70px; color: white">Infantil</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="promocoes.php" style="padding-right: 70px; color: white">Promoções</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="cuidadosdiarios.php" style="padding-right: 70px; color: white">Cuidados Diários</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="genericos.php" style="color: white">Genéricos</a>
			</li>
			
		</ul>
	
	</div>
	
</nav>