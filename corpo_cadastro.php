<form class="modal-content" action="" id="formCadastro" style="margin-top: 35px">
	<div class="container">
		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<button type="button" class="btn btn-primary disabled" style="width: 100%">CADASTRO</button>
			</div>
	
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<a href="login.php"><button type="button" class="btn btn-outline-primary" style="width: 100%">LOGIN</button></a>
			</div>
			<div class="col-sm-12">
			  </br>

			  <label for="nome">Login</label>
			  <input type="text" id="nome" placeholder="Ex. Leonardo" name="nome">
			  </br>

			  <label for="psw">Password</label>
			  <input type="password" id="senha" placeholder="" name="psw">
			
			  <label for="cpf">CPF</label>
			  <input type="number" id="cpf" placeholder="Ex. 123.456.789-12" name="cpf">

			   <label for="email">Email</label>
			  <input type="text" id="email" placeholder="Ex. joaodasilva@gmail.com" name="email">

			  <label for="dtnasc">Data de Nascimento</label><br>
			  <input type="date" id="dtnasc" placeholder="Ex. 01/01/1999" name="dtnasc"><br>

			  <label for="sexo" name="sexo">Sexo</label><br>
			  <input type="radio" name="sexo" value="masc" checked>Masculino
			  <input type="radio" name="sexo" value="fem">Feminino<br><br>

			  <label for="tel">Telefone</label>
			  <input type="number" id="tel" placeholder="Ex. (99) 99999-9999" name="tel">

			  <div class="clearfix">
				<div class="text-center">
					<input type="button" id="salvar" class="btn btn-outline-primary" value="CRIAR CADASTRO"><br>
				</div>
			  </div>
			  <div id="mensagem_erro"></div>
			  <div id="insere_aqui"></div>
			</div>
		</div>
	</div>				
</form>	