    <?php   
     
require_once('../sc/nusoap/lib/nusoap.php');
$url ='http://localhost:53176/DB.asmx?WSDL';
$client = new nusoap_client($url,true);
$clave  = isset($_GET["clave"])? $_GET["clave"]:"";
$lastName = isset($_GET["apellido"])? $_GET["lastName"]:"";
$email  = isset($_GET["email"])? $_GET["email"]:"";
$pass  = isset($_GET["pass"])? $_GET["pass"]:"";
$confirm  = isset($_GET["passConfirm"])? $_GET["passConfirm"]:"";


      $param = array('userName' => $clave);
  $LsResultado = "Inválido";
      $validar=$client->call("existUser", $param);
$exist="false";
      foreach ($validar as $key ) {
        if($key=="existe"){
     
          $exist="true";
      echo "YA HAY UN USUARIO CON ESE NOMBRE , INGRESE OTRO";
        }
      }


  if($pass != $confirm){ 
$error_message = 'El password no es el mismo<br>'; 
}else if ($exist=="false"){


      $param = array('userName' => $clave , 'lastName' => $lastName,'email' => $email,'pass' => $pass);
    
      $productByCode =$client->call("insertUserData", $param );
     echo "USUARIO INGRESADO CON EXITO";    
}
    ?>  