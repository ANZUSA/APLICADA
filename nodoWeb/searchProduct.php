<?php
session_start();
require_once('sc/nusoap/lib/nusoap.php');

$url ='http://192.168.43.28/DB.asmx?WSDL';
$client = new nusoap_client($url,true);
  $searchTerm = $_GET['term'];


$productByName =$client->call("selectProductData");
$return_arr = array();

	foreach($productByName as $product_key => $product_info){
 	           foreach($product_info as $tag_key => $tag_info){
 			                foreach($tag_info as $data_key => $data_info){
 			                	 $return_arr[] =$data_info["name"];
 


 			                }
 			                }
 			                }   

 /* Toss back results as json encoded array. */
    echo json_encode($return_arr);


  ?>