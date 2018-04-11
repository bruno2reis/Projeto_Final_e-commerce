<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-heading-label">Produtos</div>
    </div>
    <?php
    $query = "SELECT * FROM tbl_product";
    $product_array = $shoppingCart->getallproduct($query);
    if (! empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
        <div class="product-item">
			<form method="post"
				action="carrinho.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
				<div class="product-image">
					<img src="<?php echo $product_array[$key]["image"]; ?>">
					<div class="product-title">
						<?php echo $product_array[$key]["name"]; ?>
					</div>
				</div>
				<div class="product-footer">
					<div class="float-right">
						<input type="text" name="quantity" value="1"
							size="2" class="input-cart-quantity" /><input type="image"
							src="img/add-to-cart.png" class="btnAddAction" />
					</div>
					<div class="product-price float-left"><?php echo "R$ ".$product_array[$key]["price"]; ?></div>
					
				</div>
			</form>
		</div>
    <?php
        }
    }
    ?>
</div>