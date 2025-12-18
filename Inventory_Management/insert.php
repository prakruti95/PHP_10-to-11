<?php include('header.php');?>


<?php
   
    
    $pname = $_POST["product_name"];
    $pprice = $_POST["product_price"];
    $pdes = $_POST["product_description"]; 

    

    $sql = "insert into products(product_name,product_price,product_description) values('$pname', '$pprice', '$pdes')";
   $result = mysqli_query($conn,$sql);

     if (!$result) 
        {
            echo "something went wrong ". mysqli_error($con);
        }

        else 
        {
           echo "<script type='text/javascript'>alert('Product added successfully!')</script>";
           header("Location: index.php");

        }    
    

?>




<?php include('footer.php');?>