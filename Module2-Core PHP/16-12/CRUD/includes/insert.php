<?php include('../header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form  method="post">
      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="username"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" name="email"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="password"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>



</body>
</html>

<?php

    if (isset($_POST['create'])) 
    {
    
    $uname = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; 

    $sql = "insert into emp(username,email,password) values('$uname', '$email', '$pass')";
   $result = mysqli_query($conn,$sql);

     if (!$result) 
        {
            echo "something went wrong ". mysqli_error($con);
        }

        else 
        {
           echo "<script type='text/javascript'>alert('User added successfully!')</script>";
           header("Location: ../index.php");

        }    
    } 

?>




<?php include('../footer.php');?>