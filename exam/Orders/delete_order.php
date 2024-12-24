<?php
   
   
header("Access-Control-Allow-Method: DELETE");
header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 =  new  Config();

if($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
    $data = file_get_contents("php://input");
    parse_str($data, $result);

     $id = $result ['id'];


  if($id>0)
  {
     $res = $c1->deleteOrder($id);
     if($res)
     {
       echo 'Data delete succsessfully !!!!';
     }
     else{
        echo 'Data not deleted  !!!!';
     }
  }
  else
  {
    echo 'Add all requierd fileds !!!';
  }
}
else {
    echo 'only DELETE type requried !!!';
    http_response_code(400);

}

?>