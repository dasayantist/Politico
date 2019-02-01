<?php
 //ob_start();
 session_start();
 require_once 'configdb2.php';
 
 // it will never let you open index(login) page if session is set
 if(isset($_POST['submit'])) {
include 'configdb2.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admindata where email='$email' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
session_start();
$_SESSION['email'] = $row['email'];
$_SESSION['office_id'] = $row['office_id'];
$_SESSION['username'] = $row['username'];
// $_SESSION['Fname'] = $row['Fname'];
// $_SESSION['office_id'] = $row['office_id'];

// $_SESSION['office_name'] = $row['office_name'];

header("location:home.php?email=$email");
}
}
} 
else {
   
echo' wrong credentials try again ';
}
$conn->close();
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
<div class="wrapper">
<div class="container" style="margin-top:10%;>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"required='true' autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required='true'>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type='submit' class="btn btn-sm btn-success btn-block" name='submit' value='login'>
                                
                            </fieldset>
                           
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