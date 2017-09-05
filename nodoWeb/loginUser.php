<?php
header("Content-Type: text/html; charset=UTF-8");
session_cache_limiter(FALSE); 
session_start();
require_once('sc/nusoap/lib/nusoap.php');
$url ='http://192.168.43.28/DB.asmx?WSDL';
$client = new nusoap_client($url,true);
$param = array('userName' => $_POST["userName"] , 'pass' => $_POST["pass"]);
if (!is_null($_SESSION["SESSION"])) {
		echo '<script language="javascript">alert("';
echo "DEBES CERRAR SESSION PRIMERO ANTES DE INICIAR CON UN USUARIO NUEVO PRESIONA LA X DEL CUADRO DE LA DERECHA";
echo '");</script>';
            include('login.php');

}else{
		
			$validar=$client->call("loginUser", $param);
		
			foreach ($validar as $key ) {
				if($key=="correcto"){

					$_SESSION["SESSION"]=$_POST["userName"]; 

				
				}
			}
			if(!is_null($_SESSION["SESSION"]) ){
            header('Location: tipoCambio.php');
			}
	
}
 	      
  ?>