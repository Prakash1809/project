<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
 include('header.php');
include('connect.php');

  ?>

<!--header end-->
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">



                           Realtor Contact Update
                        </header>
                        <?php
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $email=$row["email"];
        $address=$row["address"];
       
        $contact=$row["phone"];
    }
}

                        ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="POST" action="contact_update.php" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value= <?php echo $email;?> >
                                </div>
                                <div class="form-group">
                                    <label for="Name">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value=<?php echo $address;?> >
                                </div>

                                <div class="form-group">
                                    <label for="PhoneNumber">Contact</label>
                                    <input type="text" class="form-control" name="contact" id="contact"  value= <?php echo $contact;?>>
                                </div>
                                

                                
                                
                                <button type="submit" class="btn btn-info">Update</button>
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
         