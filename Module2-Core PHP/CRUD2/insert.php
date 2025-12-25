<?php
    include('connect.php');
    if (isset($_POST['submit'])) 
    {
    
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; 
    $bio = $_POST["bio"];
    //$photo = $_FILES['photo']['name'];
    $gender = $_POST["gender"];
    $lan = $_POST["lan"]; 
    $l = implode(",",$lan);


    move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$_FILES['photo']['name']);
    $sql = "insert into emp(username,email,password,bio,photo,gender,language) values('$uname', '$email', '$pass','$bio','$photo','$gender','$l')";
   $result = mysqli_query($conn,$sql);

     if (!$result) 
        {
            echo "something went wrong ". mysqli_error($conn);
        }

        else 
        {
           echo "<script type='text/javascript'>alert('User added successfully!')</script>";
           header("Location: index.php");

        }    
    } 

?>




<?php include('../footer.php');?>