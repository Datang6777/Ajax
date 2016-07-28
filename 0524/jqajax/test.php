<?php 
//
$data = file_get_contents("php://input");
$obj = json_decode($data);
//print_r($obj);
echo $obj->age;
 ?>