<?php
   
   
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 =  new  Config();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $order_date =  $_POST['order_date'];
  $statusdata = $_POST['status'];

  if($order_date != '' && $statusdata != '' )
  {
     $res = $c1->insertOrder($order_date,$statusdata);
     if($res)
     {
       echo 'order inserted succsessfully !!!!';
     }
     else{
        echo 'order not inserted  !!!!';
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