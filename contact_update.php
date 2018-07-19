<?php
include('connect.php');
error_reporting(0);
session_start(); 
if (empty($_SESSION['sess_user'])){
	header('location:login.php');
} 

$email= $_POST['email'];
$address= $_POST['address'];
$contact= $_POST['contact'];
 $sql ="UPDATE contact  SET email='$email', address='$address', phone='$contact' where id ='1'";




$result = mysqli_query($conn, $sql);
if(!$result){
	header('location:404.html');
}
else{
	echo "data succesfully updated";
header('location:contact.php');
}
?>
