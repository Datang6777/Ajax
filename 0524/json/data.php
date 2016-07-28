<?php
/**
 * Created by PhpStorm.
 * User: sks
 * Date: 2016/5/24
 * Time: 10:43
 */

$data = array('name'=>'ucai','age'=>4);
var_dump( $data);
echo '<br>';
echo json_encode($data);

print_r($_POST);

$data = file_get_contents("php://input");
$obj = json_decode($data);
//print_r($obj);
echo $obj;