<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../../db.php";

$sql = "select * from users";
$query = mysqli_query($connection, $sql);

if(mysqli_num_rows($query)>0)
{
    $output = mysqli_fetch_all($query,MYSQLI_ASSOC);
    echo json_encode($output);
}
else
{
    echo json_encode(array('message'=>'Something went wrong','status'=>false));
}
?>