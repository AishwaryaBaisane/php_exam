<?php
   
   
header("Access-Control-Allow-Method: POST");
header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 =  new  Config();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name =  $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  if($name != '' && $email != '' &&  $phone != 0 ) 
  {
    if($phone >= 9)
    {
      $res = $c1->inserUser($name,$email,$phone);
      if($res)
      {
        echo 'User inserted succsessfully !!!!';
      }
      else{
         echo 'User not inserted  !!!!';
      }
    }
    else
    {
      echo 'Phone number Must greter than 9  !!!!';
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