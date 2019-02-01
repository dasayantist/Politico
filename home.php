<?php
session_start(); 
if (!isset($_SESSION['email'])) {
  header("Location:index.php?asseterror=Please Log In ");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>online voting system</title>
    <?php include('includes.php'); 
     $username=$_SESSION['username'];
     //$_SESSION['userEmail'] = $row['userEmail'];

    ?>
   
</head>

<body style="background-color:#FFFF99;">

  <div id="page-wrapper" style="background-color:#FFFF99;">
            <div class="row" >
                
<div class="col-lg-12">
<div class= "jumbotron">
 <marquee><h1 style="color:green;text-align:center; "><?php echo " wellcome to administrator $username"; ?> </h1></marquee>
 </div>
</div>

 </div>
        </div>
        
</body>

</html>
