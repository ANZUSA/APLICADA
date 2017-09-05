<?php
session_start();
require_once('nusoap/lib/nusoap.php');

$url ='http://localhost:53176/DB.asmx?WSDL';
$client = new nusoap_client($url,true);
if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["code"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}
		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart </div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<?php foreach ($_SESSION["cart_item"] as $item) { 

		$param = array('code' => $item["code"]);
		
		$product_info =$client->call("selectOneProductData", $param );

	foreach($product_info as $product_key ){
 	           foreach($product_key as $tag_key ){
		
?>
	<div class="product-item" onMouseOver="document.getElementById('<?php echo $item["code"]; ?>').style.display='block';"  onMouseOut="document.getElementById('<?php echo $item["code"]; ?>').style.display='';" >
		<div class="product-image"><img src="<?php echo $tag_key["img"]; ?>"></div>
		<div><strong><?php echo $item["name"]; ?></strong></div>
		<div class="product-price"><?php echo "$".$item["price"]; ?></div>
		<div>Quantity: <?php echo $item["quantity"]; ?></div>
		<div class="btnRemoveAction" id="<?php echo $item["code"]; ?>"><a href="shopping_cart.php?action=remove&code=<?php echo $item["code"]; ?>" title="Remove from Cart">x</a></div>
	</div>
<?php
}
}
	}
}
?>
<div class="cart_footer_link">
<a href="shopping_cart.php?action=empty">Clear Cart</a>
<a href="../shop.php" title="Cart">Continue Shopping</a>
</div>
</div>


<script>
function toggleAction(id) {
	if(document.getElementById("remove"+id).style.display == 'none') {
		document.getElementById("remove"+id).style.display = 'block';
	} else {
		document.getElementById("remove"+id).style.display = 'none';
	}
}
</script>
</BODY>
</HTML>