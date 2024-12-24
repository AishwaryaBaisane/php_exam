<?php
   
   
header("Access-Control-Allow-Method: PUT");
header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 =  new  Config();

if($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);

  $id = $result ['id'];
  $product_name =  $result['product_name'];
  $price = $result['price'];

  if($product_name != '' && $price != 0 &&  !empty($price))
  {
     $res = $c1->update_product($id,$product_name,$price);
     if($res)
     {
       echo 'product updateted succsessfully !!!!';
     }
     else{
        echo 'product not updated  !!!!';
     }
  }
  else
  {
    echo 'Add all requierd fileds !!!';
  }
}
else {
    echo 'only PUT type requried !!!';
    http_response_code(400);

}

?>