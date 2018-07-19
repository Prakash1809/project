<?php
include('connect.php');
 include('header.php');

session_start(); 
if (empty($_SESSION['sess_user'])){
	header('location:login.php');
} 
$id=$_GET['id'];

if(isset($_POST['submit']))
{
$name= $_POST['name'];
$email=$_POST['email'];
$sql1 ="UPDATE register  SET name='$name', email='$email' where id ='$id'";
$result1 = mysqli_query($conn, $sql1);

if (!$result1) { // Error handling
    echo "Something went wrong! :("; 
}

else{
	echo "data succesfully updated";
header('location:webuser.php');
}
}
?>

<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
       
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">



                           user Update
                        </header>
                        <?php
 $sql = "SELECT * FROM register where id ='$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $email=$row["email"];
        $name=$row["name"];
        
    }
}

                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST" action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value= <?php echo $name;?> >
                                </div>
                                <div class="form-group">
                                    <label for="Name">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value=<?php echo $email;?> >
                                </div>

                                <input type="submit" name="submit" class="btn btn-info">
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            

        <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <?php 
         include('footer.php');
         ?>
