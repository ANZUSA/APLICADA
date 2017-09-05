
<!DOCTYPE HTML>
<html>
<head>

	<?php


include("header.php");
?>
<script src="js/prototype.js" type="text/javascript"></script> 
</head>
<body>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
						<form method="post" name="form"> 
								<div class="register-top-grid">
										<h3>INFORMACION PERSONAL</h3>
										<div>
											<span>NOMBRE<label>*</label></span>
											<input name="usuario" /> <span id="comprobar_mensaje"></span>
										</div>
										<div>
											<span>APELLIDO<label>*</label></span>
											<input id="lastName" name="lastName" type="text"  required> 
										</div>
										<div>
											<span>EMAIL<label>*</label></span>
											<input id="email" name="email" type="text"   required> 
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>SIGUENOS PARA NOVEDADES</label>
											</a>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<div class="register-bottom-grid">
										<h3>INFORMACION DE REGISTRO</h3>
										<div>
											<span>CONTRASEÑA<label>*</label></span>
											<input  id="pass" name="pass" type="text"  required>
										</div>
										<div>
											<span>CONFIRMA CONTRASEÑA<label>*</label></span>
											<input   id="passConfirm" name="passConfirm" type="text"   required>
										</div>
										<div class="clear"> </div>
								</div>
								<div class="clear"> </div>
								<input type="submit" value="submit" OnClick="ValidaUsuario(document.form.usuario.value,document.form.lastName.value,
								document.form.email.value,document.form.pass.value,document.form.passConfirm.value);">
						</form>
					</div>
		   </div>
<script type="text/javascript"><!--  
function DameAjxInst() { 
     var InstAjax=false; 
     try { InstAjax =new ActiveXObject("Msxml2.XMLHTTP"); } 
          catch(e) { 
      try { InstAjax =new ActiveXObject("Microsoft.XMLHTTP"); } 
          catch(E) { 
                 if (!InstAjax && typeof XMLHttpRequest!='undefined') 
                    InstAjax =new XMLHttpRequest(); 
          } 
      } 
return InstAjax;; 
} 
function ValidaUsuario(usuario,lastName,email,pass,passConfirm) { 
   var ajax= DameAjxInst ();
   var mensaje ="invalido";
   // realiza la petición a través de GET  al script de php que creamos previamente
     ajax.open("GET", "ajax/ajax_comprobar_nick.php?clave="+usuario + "&lastName=" + lastName  + "&email=" + email + "&pass=" + pass+ "&passConfirm=" + passConfirm , false); 
     ajax.onreadystatechange=function() { 
     if (ajax.readyState==4) 
        mensaje=ajax.responseText; 
     } 
     ajax.send(null); 
     
	 alert("El usuario es: " + mensaje);
     return null; 
}

  
</script> 
	  </div>
	<?php


include("footer.php");
?>
</body>	
</html>