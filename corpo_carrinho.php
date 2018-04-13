<?php
require_once "funcoescarrinho.php";
require_once "membros.php";
?>

<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }
}
?>


<!-- Título e botão para finalizar -->

<section class="container">
	<div class="row">
	
		<div class="col-xl-9 col-lg-8 col-md-7 col-sm-7 col-7 mt-4">
			<h3 style="margin: 0" id="meucarrinho"><span style="color: rgb(38,95,167)">Meu carrinho</span></h3>
		</div>
		
		<div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-5 mt-4">
			<div class="text-center" style="margin:0">

				<?php
					if (! empty($cartItem)) {
						?>
						
						<a href="checkout.php"><button type="button" class="btn btn-primary" name="check_out" id="botaocarrinho">FINALIZAR</button></a>
						
						<?php
					} // End if !empty $cartItem
				?>
				
			</div>
		</div>
		
	</div>
</section>


<!-- Chamar arquivo com os itens do carrinho -->

<div class="container">

        <?php
			if (! empty($cartItem)) {
					?>
				<?php
					require_once ("cart-list.php");
				?>  

				<?php
			} // End if !empty $cartItem
        ?>
		
</div>

<!-- Totais -->

<div class="container">

	<div class="row">
		
		<div class="col-xl-5 offset-xl-7 col-lg-5 offset-lg-7 col-md-7 offset-md-5 col-sm-12 col-12 mt-4">

			<div id="shopping-cart">
				<div class="txt-heading"> <!-- Fundo colorido com bordas superior e inferior -->

					<div class="container">

						<div class="row">
							
							<div class="col-xl-4 col-lg-3 col-md-4 col-sm-4 col-4 mt-2">
								<h5>Resumo</h5>						
							</div>
							
							<div class="col-xl-6 col-lg-7 col-md-6 col-sm-6 col-6 mt-2">
							
								<div class="cart-status">
									<div>Quantidade Total: <?php echo $item_quantity; ?></div>
									<div>Preço total: R$ <?php echo str_replace('.', ',', number_format($item_price,2)); ?></div>
								</div>
							</div>
							
							<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 mt-2">
								<a id="btnEmpty" href="carrinho.php?action=empty"><img
										src="img/empty-cart.png" alt="empty-cart"
										title="Esvaziar Carrinho"/></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
				
	</div>


	<!-- Botões para continuar comprando e finalizar -->				
					
	<div class="container">

		<div class="row" style="padding-top: 20px;">
		
			<div class="col-xl-3 offset-xl-9 col-lg-4 offset-lg-8 col-md-5 offset-md-7 col-sm-12 col-12 mb-3">
				<div class="text-center" style="margin:0">
					<a href="index.php"><button type="button" class="btn btn-primary" name="cont_compr" id="botaocarrinho">CONTINUAR COMPRANDO</button></a>			
				</div>
			</div>

			<div class="col-xl-3 offset-xl-9 col-lg-4 offset-lg-8 col-md-5 offset-md-7 col-sm-12 col-12">
				<div class="text-center" style="margin:0">
					
					<?php
						if (! empty($cartItem)) {
							?>
							<a href="checkout.php"><button type="button" class="btn btn-primary" name="check_out" id="botaocarrinho">FINALIZAR</button></a>
							
							<?php
						} // End if !empty $cartItem
					?>
		
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>
