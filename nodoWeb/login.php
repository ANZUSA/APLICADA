
<!DOCTYPE HTML>
<html>
<head>
<?php
include("header.php");
?>

 </head>
<body>
	
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">PARA EL CLIENTE</h4>
					<p> Practicar tu deporte preferido con el mejor material es una garantía de seguridad y de rendimiento... pero también es una manera de divertirse. He creado HOBBIE SPORT para que disfrutes de ofertas excepcionales de material deportivo de gran calidad. HOBBIE SPORT está dirigido a aquellos que practican deporte de manera ocasional y para los más apasionados, que se preocupan de equiparse en las mejores condiciones... ¡Y con la mejor relación calidad/precio!</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="CREAR CUENTA"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-title">
	           		<h4 class="title">REGISTRAR CLIENTE</h4>
					<div id="loginbox" class="loginbox">
						<form action="loginUser.php" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">NOMBRE USUARIO</label>
						      <input id="modlgn_username" type="text" name="userName" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">CONTRASEÑA</label>
						      <input id="modlgn_passwd" type="password" name="pass" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">OLVIDASTE TU CONTRASEÑA? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="INICIAR SESSION"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				 <div class="clear"></div>
			  </div>
			</div>
		  </div>
	  </div>
	  <?php


include("footer.php");
?>
</body>	
</html>