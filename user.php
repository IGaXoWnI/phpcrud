<?php
include 'connect.php' ;

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];

    $sql = "INSERT INTO `examphp` (name,email,phone,password)
    VALUES ('$name','$email', '$phone', '$password')"; 


    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <div class="container my-5">
    
    <form method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder = "Enter your name" name = "name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder = "Enter your email" name = "email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" placeholder = "Enter your phone number" name = "phone" autocomplete="off">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder = "Enter your Password" name = "password" autocomplete="off">
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="submit" name="display" class="btn btn-primary  "><a href="display.php" class = "text-light text-decoration-none">Display</a>
  </button>
</form>    
</div>
    
</html>