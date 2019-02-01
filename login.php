<?php
session_start();
require_once "../configdb.php";
//include_once 'includes.php';
if(isset($_POST['submit'])){

 $email=$_POST['emailAddress'];
 $password=$_POST['password'];

 $query= $conn->prepare("SELECT count(*)FROM admindata WHERE(emailaddress='".$email."' and password='".$password."')");
 // $query->bindparam(':email',$email);
 // $query->bindparam(':password',$password);
$query-> execute();

 $query1=$query->setFetchMode(PDO::FETCH_OBJ);

@$count=mysql_num_rows(@$query1);

	if($count>0)
	{

		header("location:../home.php");
		// echo "successful login";
		// $_SESSION['username']=$username;
		// echo("welcome");
	}
	else{
		echo "login fail";
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:#66FF66;">
<div class="container" style="margin-top:10%;  ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="background-color:#FFFF99;">
                    <div class="panel-heading" background-color:#66FF66;">
                        <h3 class="panel-title">login</h3>
                    </div>
                    <div class="panel-body">
                  <form action="" method="post">
								  <div class="form-group">
								    <label for="email">Email address:</label>
								    <input type="email" name="emailAddress" class="form-control" id="email">
								  </div>
								  <div class="form-group">
								    <label for="pwd">Password:</label>
								    <input type="password" name="password" class="form-control" id="pwd">
								  </div>    
								  <div class="checkbox">
								    <label><input type="checkbox"> Remember me</label>
								  </div>
								  <button type="submit" name="submit" class="btn btn-default">login</button>

									</form>
									</div>
								</div>
							</div>
						</div>
				   </div>
		   
      
  <script src="assets/js/jquery.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <!-- js-->
   <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>