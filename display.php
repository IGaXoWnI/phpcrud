<?php
include 'connect.php' ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <button class='btn btn-primary'><a href="user.php" class="text-light text-decoration-none"> add user</a>
           </button>
           <table class="table my-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATION</th>


    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql="SELECT * FROM `examphp`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary btn-sm"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">UPDATE</a></button>
            <button class="btn btn-danger btn-sm"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">DELETE</a></button>
            </td>
                </tr>' ;
        }
    }
  
    ?>
    

    



  </tbody>
</table>


    </div>
    
</body>
</html>