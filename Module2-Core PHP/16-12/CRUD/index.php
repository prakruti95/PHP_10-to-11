<?php include('header.php');?>
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <div class="container">
    <h1 class="text-center" >Data to perform CRUD Operations</h1>
    <a href="includes/insert.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New User</a>  

    <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Username</th>
              <th  scope="col">Email</th>
              <th  scope="col"> Password</th>
              <th  scope="col" colspan="3" class="text-center">CRUD Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
    
    
    </div>
 </body>
    </html>

    <?php
        $sql = "select * from emp";
        $result = mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result))
        {
             $id = $row['id'];                
            $user = $row['username'];        
            $email = $row['email'];         
            $pass = $row['password'];      
         
            echo "<tr>";
            echo " <th scope='row' >{$id}</th>";
            echo " <td > {$user}</td>";
            echo " <td > {$email}</td>";
            echo " <td >{$pass} </td>";
            echo "<td class='text-center'> <a href='includes/view.php?user_id={$id}' class='btn btn-primary' ><i class='bi bi-eye'></i>View</a></td>";
            echo "<td class='text-center'> <a href='includes/update.php?user_id={$id}' class='btn btn-secondary' ><i class='bi bi-pencil'></i>Update</a></td>";
            echo "<td class='text-center'> <a href='includes/delete.php?user_id={$id}' class='btn btn-danger' ><i class='bi bi-trash'></i>Delete</a></td>";
            echo "</tr>";
        }

    ?>

<?php include('footer.php');?>