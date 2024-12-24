<?php

header("Access-Control-Allow-Method: GET");
header("Content-Type: application/json");

include'../config.php';

$c1 = new Config();


if($_SERVER['REQUEST_METHOD']=="GET")
{

    $res = $c1->fetch_api();
    $arr = [];
    if($res)
       {
        while($data = mysqli_fetch_assoc($res))
        {
            array_push($arr,$data);
        }
       }
       else{
        $arr['msg'] = "Database not found !";
       }

} else
 {
    $arr['err']="Only Get TYPE ALLOW ";
    http_response_code(400);

}
echo json_encode($arr);