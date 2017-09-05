<?php
 header("Content-Type: text/html; charset=UTF-8");
 session_cache_limiter(FALSE); 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<?php
include("header.php");
?>
</head>
<body>
<?php 
require_once('sc/nusoap/lib/nusoap.php');
$url ='http://192.168.43.28/DB.asmx?WSDL';
$client = new nusoap_client($url,true);

$compra = $_SESSION["cambio"]["compra"];


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$param = array('code' => $_GET["code"]);
			$productByCode =$client->call("selectOneProductData", $param );
	foreach($productByCode as $product_key ){
 	           foreach($product_key as $tag_key ){
 	           //	echo $tag_key["code"];
$itemArray = array($tag_key["code"]=>array('name'=>$tag_key["name"], 'code'=>$tag_key["code"], 'quantity'=>$_POST["quantity"], 'price'=>$tag_key["price"]));
			if(!empty($_SESSION["cart_item"])) {

				if(in_array($tag_key["code"],$_SESSION["cart_item"])) {

					foreach($_SESSION["cart_item"] as $k => $v) {
							if($tag_key["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}

 			            }
 			        }
 			   

			
		}
	break;
}
}

 ?>

        <div class="main">
        <div class="shop_top">
   
		<div class="container">
       	<div class="row shop_box-top">
<a href="shopping_cart.php" title="Cart">View Cart</a><br>



<?php

$session_items = 0;
if(!empty($_SESSION["cart_item"])){
	$session_items = count($_SESSION["cart_item"]);
}

$product_array=$client->call("selectProductData");

	foreach($product_array as $product_key => $product_info){
 	           foreach($product_info as $tag_key => $tag_info){
 			                foreach($tag_info as $data_key => $data_info){
?>

			<div class="col-md-3 shop_box"><a href="single.php">

			<form method="post" action="shop.php?action=add&code=<?php echo $data_info["code"]; ?>">

					<img src="<?php echo $data_info["img"]; ?>" class="img-responsive" alt=""/>
						<span class="new-box">
						<span class="new-label">NUEVO</span>
					</span>
					<span class="sale-box">
						<span class="sale-label">VENTA</span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><strong><?php echo $data_info["name"]; ?></strong></a></h3>
						<p><?php echo $data_info["code"]; ?></p>
					<?php if(!is_null($_SESSION["SESSION"])) {?>
						<span class="actual"><?php echo "₡".$data_info["price"]; ?></span><br>

						<span class="actual"><?php echo "$".($data_info["price"]/$compra) ?></span><br>
					<?php } ?>

						<ul class="buttons">
						<?php if(!is_null($_SESSION["SESSION"])) {?>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
					<?php } ?>
							<li class="shop_btn"><a href="#">VER MAS</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
			
		
			</form>
			
		</a></div>



<?php 

 			                }
 			            }
 			        }

?>

  </div>

	   </div>
	  </div>
	  </div>

	 	<?php 
include("footer.php");
		?>
</body>	
</html>