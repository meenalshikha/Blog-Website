<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connect.php';
session_start();

$message = "";
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM `data` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
       $_SESSION['email'] = $email;
        header("Location: template.php"); 
        exit();
    }else{
       $message = '<div class="alert alert-danger" role="alert">Wrong email or password. Please check and try again.</div>';
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.rtl.min.css" >
</head>
<body>
  <div class="container my-3">
      <?php if (!empty($message)) { echo $message; } ?>
</div>
    <div class="secimg">
        <div class="form-wrapper">
    <form class="p-4 shadow bg-white rounded" method="post" action="">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
   <button type="submit" class="btn btn-primary" name="submit">Login</button>
<a href="index.php" class="btn btn-primary">Signup</a>
<a href="index.php" class="btn btn-primary">LogOut</a>
</form>
    </div>
    </div>
</body>
</html>
