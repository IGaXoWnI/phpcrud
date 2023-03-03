<?php
include 'connect.php' ;

$id=$_GET['updateid'];
$sql="SELECT * FROM `examphp` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $password =$_POST['password'];

    $sql="UPDATE `examphp` SET id=$id , name='$name' , email='$email' , phone='$phone' ,
     password='$password' WHERE id=$id"; 

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
    <input type="text" class="form-control" placeholder = "Enter your name" name = "name" autocomplete="off" value=<?php echo $name; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder = "Enter your email" name = "email" autocomplete="off" value=<?php echo $email; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Phone</label>
    <input type="number" class="form-control" placeholder = "Enter your phone number" name = "phone" autocomplete="off" value=<?php echo $phone; ?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder = "Enter your Password" name = "password" autocomplete="off" value=<?php echo $password; ?>>
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="submit" name="display" class="btn btn-primary  "><a href="display.php" class = "text-light text-decoration-none">Display</a>
  </button>
</form>    
</div>
    
</html>