<?php
	require_once "funcoescarrinho.php";

	$userLogado = new ShoppingCart();
	
	$userLogado->getLogado();
?>


<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" Content="IE-Edge">
		<meta charset="utf-8">
		<title>Medcare - Genéricos</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/cardslider.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/cadastro.css">
		<link rel="stylesheet" href="css/flickity.css" media="screen">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/carrosseis.css">
		<link rel="stylesheet" href="css/carrinho.css">
		<link rel="stylesheet" href="css/nav.css">
		<meta name="author" content="Grupo 1 - Senac">
		<meta name="description" content="Medcare - A sua farmácia referência">
	</head>
	
	<body>
        
		<?php require_once "nav.php"; ?>

		<?php require_once "corpo_genericos.php"; ?>
		
		<?php require_once "footer.php"; ?>
				
		<!-- Carregamento de arquivos JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>      
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script> 	<!-- Inclusão do Plugin jQuery Validation-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="js/flickity.pkgd.min.js"></script>
        <script src="js/total.js"></script>
        <script src="js/cadastro.js"></script>

	</body>
</html>