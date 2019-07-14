<?php
// Initialize the session
session_start();
 
$myid = $_GET["hid"];
$unused = $myid;

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //header("location: ../single/checkout.php");
    header("location: ../single/checkout.php?hid=$unused");
    exit;
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; position:center; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper" style="text-align: center; margin-left:35%;margin-right:35%;">
        <h2>Login</h2>
        <p>Please login to continue with checkout</p>
        <form action="loginscript.php?hid=<?php echo $unused;?>" method="post">
                <label>Username</label>
                <input type="text" name="username" class="form-control" >
               
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>