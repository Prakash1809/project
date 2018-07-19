<?php
 include('connect.php');
$id=$_GET['id'];

$sql1 ="Delete From register  where id ='$id'";
$result1 = mysqli_query($conn, $sql1);
if(!$result1){
	 header('location:webuser.php?msg=fail');
}
else{
	header('location:webuser.php?msg=sucess');
   
}

?>
