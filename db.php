<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "task-management-system";

$connection = mysqli_connect($server,$username,$password,$db);

if (!$connection)
{
    die("Connection went wrong  ".mysqli_connect_error());
}

?>