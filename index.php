<?php
include 'connect.php';

$message = ""; 
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkEmail = "SELECT * FROM `data` where email='$email'";
    $checkResult= mysqli_query($conn,$checkEmail);

    if(mysqli_num_rows($checkResult)>0){

          $message='<div class="alert alert-danger" role="alert">Email already exist!! Try another</div>';
    }else{
    $sql= "INSERT INTO `data` (email,password) values ('$email','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        session_start();
        $_SESSION['email'] = $email;
        header("Location: template.php"); 
        exit();
    } else {
        die(mysqli_error($conn));
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.rtl.min.css" >
</head>
<body>
  <div class="container my-3">
      <?php if (!empty($message)) { echo $message; } ?>
    </div>
    <div class="backimg">
        <div class="form-wrapper" >
    <form class="p-4 shadow bg-white rounded" method="post" action="">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
 <button type="submit" class="btn btn-primary" name="submit">Signup</button>
<a href="login.php" class="btn btn-primary">Login</a>
<br>
<br>
 <a href="manage.php" class="btn btn-warning">Manage Profile</a>
</form>
    </div>
    </div>
</body>
</html>
