
<?php
$username = trim($_POST['user']);
$password = trim($_POST['pass']);
$lastName = trim($_POST['lastName']);
$email = trim($_POST['email']);
$passConfirm = trim($_POST['passConfirm']);



if(empty($username))
{
       $resp['status'] = false;
       $resp['message'] = "FALTAN DATOS";  
}

if(empty($password))
{
       $resp['status'] = false;
       $resp['message'] = "FALTAN DATOS";
}
if(empty($lastName))
{
       $resp['status'] = false;
       $resp['message'] = "FALTAN DATOS";
}if(empty($email))
{
       $resp['status'] = false;
       $resp['message'] = "FALTAN DATOS";
}if(empty($passConfirm))
{
       $resp['status'] = false;
       $resp['message'] = "FALTAN DATOS";
}
echo json_encode($resp);


  ?>