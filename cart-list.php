
<div class="shopping-cart-table">

	<div class="cart-item-container header">
		<div class="cart-info title">Nome</div>
		<div class="cart-info">Quantidade</div>
		<div class="cart-info price">Preço</div>
	</div>
	
	<?php
		foreach ($cartItem as $item) {
	 ?>
	 
	<div class="cart-item-container">
			
		<!-- Nome e imagem -->	
		<div class="cart-info title">
			<img class="cart-image" src="<?php echo $item["image"]; ?>">
			<?php echo $item["name"]; ?>
		</div>

		<!-- Quantidade -->
		<div class="cart-info">
			<?php echo $item["quantity"]; ?>
		</div>

		<!-- Preço -->
		<div class="cart-info price">
			<?php echo "R$ ".str_replace('.', ',', number_format($item["price"],2)); ?>
		</div>

		<!-- Ícone para remover o produto -->
		<div class="cart-info action">
			<a
				href="carrinho.php?action=remove&id=<?php echo $item["cart_id"]; ?>"
				class="btnRemoveAction"><img
				src="img/icon-delete.png" alt="icon-delete"
				title="Remover Item" />
			</a>
		</div>
		
	</div>
	
	<?php
		}
	?>
	
</div>
