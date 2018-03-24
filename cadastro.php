<?php
?>

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
