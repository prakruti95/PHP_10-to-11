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
   <?php
     if (isset($_GET['user_id'])) 
    {
                $userid = $_GET['user_id']; 
                $query="SELECT * FROM emp WHERE id = $userid ";
                $view_users= mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($view_users))
  {
    $id = $row['id'];
    $user = $row['username'];
    $email = $row['email'];
    $pass = $row['password'];
  }
  if(isset($_POST['Update'])) 
    {
      $user = $_POST['username'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE emp SET username = '{$user}' , email = '{$email}' , password = '{$pass}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
        header("Location: ../index.php");
    }   

     }
   ?>
        
<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form  method="post">

    <div class="form-group">
        <label for="user" class="form-label">ID</label>
        <input type="text" name="id" value="<?php echo $userid?>"  class="form-control">
      </div>

      <div class="form-group">
        <label for="user" class="form-label">Username</label>
        <input type="text" name="username" value="<?php echo $user?>"  class="form-control">
      </div>

      <div class="form-group">
        <label for="email" class="form-label">Email ID</label>
        <input type="email" name="email" value="<?php echo $email?>"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="password" value="<?php echo $pass?>"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="Update" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>



</body>
</html>





<?php include('../footer.php');?>