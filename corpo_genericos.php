<?php
require_once "funcoescarrinho.php";
require_once "membros.php";
?>

<section class="container p-t-3">
	<div class="row">
		<div class="col-lg-12">
			<h3><span style="color: rgb(38,95,167)">Genéricos</span></h3>
		</div>
	</div>
</section>


<!-- Lista de produtos -->
	
<div class="container" style="padding-bottom:0">
	<div class="row">	

		<?php
			$query = "SELECT * FROM tbl_product";
			$product_array = $shoppingCart->getProductByCategory(6);	/* Definir código da categoria para trazer na query */
			if (! empty($product_array)) {
				foreach ($product_array as $key => $value) {
					?>
					
						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
							<div class="bloco">
								<div class="text-center" style="margin-bottom: 0">

									<form method="post"	action="carrinho.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">

										<!-- Área clicável para abrir o modal -->
										<div class="clickable" data-toggle="modal" data-target="#myModal<?php echo $product_array[$key]["code"]; ?>">
											<img class="thumb_prod" src="<?php echo $product_array[$key]["image"]; ?>" width="150" alt="Produto">						
											<div class="card-title"><?php echo $product_array[$key]["name"]; ?></div>
											<div class="card-subtitle mb-2 text-muted"><?php echo $product_array[$key]["brand"]; ?></div>
											<div class="card-text"><?php echo "R$ ".$product_array[$key]["price"]; ?></div>								
											<br>
										</div>

										<!-- Botões para inserir quantidade e adicionar ao carrinho - cliques não levam ao modal -->
										<div class="container" style="margin: 0; padding-top: 0; padding-bottom:0">
											<div class="row">
												<div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
													<input type="text" id="qtd" name="quantity" value="1" class="input-cart-quantity" style="width: 40px"/>
												</div>
												<div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
													<input type="submit" class="btn btn-primary" style="height: 40px" value="Adicionar ao carrinho"/>
												</div>
											</div>
										</div>
									
									</form>						

								</div>
							</div>
						</div>
						
					<!-- Início do modal -->
					<div class="modal fade" id="myModal<?php echo $product_array[$key]["code"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel"><?php echo $product_array[$key]["name"]; ?></h4>
						  </div>
						  
						  <div class="modal-body">
						  
							<div class="text-center" style="margin-top: 0">
								<p>Cód: <?php echo $product_array[$key]["code"]; ?></p>
								<p>Fabricante: <?php echo $product_array[$key]["brand"]; ?></p>
								<p>Tarja: <?php echo $product_array[$key]["tarja"]; ?></p>
								<img class="thumb_prod" src="<?php echo $product_array[$key]["image"]; ?>" width="220" alt="Produto">
								<p>Descrição: <?php echo $product_array[$key]["descricao"]; ?></p>
								
								<p>Preço: <?php echo "R$ ".$product_array[$key]["price"]; ?></p>

								
								<form method="post"	action="carrinho.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
									<input type="text" name="quantity" value="1" class="input-cart-quantity" style="width: 40px"/>
									<input type="submit" class="btn btn-primary" style="margin-left: 10px; height: 40px; visibility: visible" value="Adicionar ao carrinho"/>
								</form>

								<button type="button" class="btn btn-outline-primary" data-dismiss="modal" style="margin-top: 20px; visibility: visible">Fechar</button>
							
							</div>
								
						  </div>
					  </div>
					</div>
					</div>								
					<!-- Fim do modal -->
					
		<?php
		}
			}
		?>

	</div>
</div>