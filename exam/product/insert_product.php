<?php
   
   
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 =  new  Config();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $product_name =  $_POST['product_name'];
  $price = $_POST['price'];

  if($product_name != '' && $price != ''  &&  !empty($price))
  {
     $res = $c1->insertProduct($product_name,$price);
     if($res)
     {
       echo 'product inserted succsessfully !!!!';
     }
     else{
        echo 'product not inserted  !!!!';
     }
  }
  else
  {
    echo 'Add all requierd fileds !!!';
  }
}
else {
    echo 'only POST type requried !!!';
    http_response_code(400);

}

?>