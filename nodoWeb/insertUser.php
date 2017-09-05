
<?php
require_once('sc/nusoap/lib/nusoap.php');

$url ='http://192.168.43.28/DB.asmx?WSDL';
$client = new nusoap_client($url,true);

	if($_POST['pass'] != $_POST['passConfirm']){ 
$error_message = 'El password no es el mismo<br>'; 
}else{
			$param = array('userName' => $_POST["name"] , 'lastName' => $_POST["lastName"],'email' => $_POST["email"],'pass' => $_POST["pass"]);
		
			$insertUser =$client->call("insertUserData", $param );
			var_dump($insertUser);      
}
			

 	  
 	


  ?>