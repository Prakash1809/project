<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="dashboard";


$conn = new mysqli($servername, $username, $password,$db);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}


?>