<?php
session_start();
require_once('sc/nusoap/lib/nusoap.php');
$url ='http://192.168.43.28/DB.asmx?WSDL';
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
<?php
include("header.php");
?>
</HEAD>
<BODY>
  <div class="main">
        <div class="shop_top">
   
		<div class="container">
       	<div class="row shop_box-top">





<?php if(is_null($_SESSION["cart_item"])){
 ?>
 <div class="container">
			<h4 class="title">EL CARRITO ESTA VACIO</h4>
			<p class="cart">NO HAS COMPRADO AUN<br>     Click<a href="shop.php"> AQUI</a> PARA HACER UNA COMPRA         </p>
			<p <br>Click<a href="login.php"> AQUI</a> PARA INICIAR SESSION O CREAR CUENTA</p>

	     </div>
	     <?php  }?>
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

	<div class="col-md-3 shop_box"><a href="single.php">

		
			<div class="product-item" onMouseOver="document.getElementById('<?php echo $item["code"]; ?>').style.display='block';"  onMouseOut="document.getElementById('<?php echo $item["code"]; ?>').style.display='';" >
			
					<img src="<?php echo $tag_key["img"]; ?>" class="img-responsive" alt=""/>
		<span class="new-box">
						<span class="new-label"><?php echo "".($item["quantity"]);  ?></span>
					</span>
					<div class="shop_desc">
						<h3><a href="#"><strong><?php echo $item["name"]; ?></strong></a></h3>
						<p><?php echo $data_info["code"]; ?></p>
					
						<span class="actual"><?php echo "₡ Unidad:".($item["price"]);  ?></span><br>
						<span class="actual"><?php echo "₡ total:".($item["price"]*$item["quantity"]);  ?></span><br>

						<ul class="buttons">
						<div class="btnRemoveAction" id="<?php echo $item["code"]; ?>"><a href="shopping_cart.php?action=remove&code=<?php echo $item["code"]; ?>" title="Remove from Cart">x</a></div>
					    </ul>
				    </div>
			 </div>
			
		</a></div>

<?php
}
}
	}
}
?>

  </div>

  </div>
  </div>
<div class="top_links">

<a align="center"  href="shopping_cart.php?action=empty">Clear Cart</a>
<a align="center" href="shop.php" title="Cart">               Continue Shopping</a>
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
	<?php 
include("footer.php");
		?>
</BODY>
</HTML>