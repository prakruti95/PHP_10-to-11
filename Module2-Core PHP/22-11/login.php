<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    

<div style="padding: 75px;">
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
    <br>
    <br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
    <br>
    <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>

<?php
    
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if($email == "tops@gmail.com" && $pass == "1234")
    {
          echo "<h4 style='color: green;'>Login Success</h4>";
    }
    else
    {
        echo "<h4 style='color: red;'>Login Fail</h4>";

    }

?>

Logical Operator : &&, || , !
A!=B