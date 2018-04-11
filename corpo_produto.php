<?php
require_once "funcoescarrinho.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {
                
                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                
                if (! empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
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

































<div class="container">
			<br>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-xs-12">
            <img src="img/novalgina.png" width="350" alt="Novalgina">
        </div>
        <div class="col-lg-7 col-md-7 col-xs-12">
            <h3>Novalgina 1g 10 Comprimidos</h3>
            <h5>Comprimido para dores de cabeça</h5>
            <p style="color: gray">Cód: 12345</p>

            <!-- Preço e botão para comprar -->
            <div class="row" style="border-style: outset">

                <div class="col-lg-7 col-md-7 col-12">
                    <h3>R$ 44,54</h3>
                </div>

                <div class="col-lg-6 col-md-7 col-12">
				<div class="text-center">
                    <button type="button" class="btn btn-primary" style="inline-block">COMPRAR</button>
					</div>
                </div>

            </div>

            <!-- Entrega, frete e prazo -->

            <div class="row" style="border-style: outset">

                <div class="col-lg-12 col-md-4 col-xs-4" style="margin-bottom: 20px">
                    <form action="">
                        <p style="display: inline">Calcular frete e prazo:</p>
                        <input type="text" name="CEP" value="Ex: 12345678">
                        <input type="submit" value="OK">
                    </form>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Entrega</strong>
                    <p>Econômica</p>
                    <p>Expressa</p>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Frete</strong>
                    <p>Grátis</p>
                    <p>R$ 14,90</p>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-4">
                    <p><strong>Prazo</strong>
                    <p>21 a 29 dias úteis</p>
                    <p>3 a 5 dias úteis</p>
                </div>
            </div>
        </div>
    </div>
</div>

