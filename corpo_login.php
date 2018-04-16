<form class="modal-content" action="" id="formLogin" style="margin-top: 35px">
	<div class="container">
		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
				<a href="cadastro.php"><button type="button" class="btn btn-outline-primary" style="width: 100%">CADASTRO</button></a>
			</div>
	
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<button type="button" class="btn btn-primary disabled" style="width: 100%">LOGIN</button>
			</div>
			

			<div class="col-sm-12">
				  <br>
				  <label for="nome">Login:</label>
				  <input type="text" name="nome" id="nome">

				  <label for="psw">Password:</label>
				  <input type="password" placeholder="" name="psw" id="psw">

				  <div class="clearfix">
						<div class="text-center">
							<input type="button" id="logar" class="btn btn-outline-primary" value="ENTRAR"><br>
						</div>
				  </div>
                <div id="mensagem_erro"></div>
                <div id="insere_aqui"></div>
			</div>
		</div>
	</div>
</form>