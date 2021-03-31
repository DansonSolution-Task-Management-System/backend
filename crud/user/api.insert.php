<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
//for post
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

require_once "../../db.php";

$data = json_decode(file_get_contents("php://input"),true);

$name = $data['name'];
$pass = $data['password'];
$role = $data['role'];

$sql = "insert into users(name,password,role) values('$name','$pass','$role');";
$query = mysqli_query($connection,sql);

if($query)
{
    echo json_encode(array('message'=>'Successfully inserted','status'=>true));
}
else
{
    echo json_encode(array('message'=>'Something went wrong','status'=>false));
}
?>