<?php include "../header.php"; ?>
<?php
     if (isset($_GET['user_id']))
    {
                $userid = $_GET['user_id']; 
        
                $sql = "delete from emp where id = {$userid} ";
                $delete_user = mysqli_query($conn, $sql);
                if ($delete_user) {
                    header("Location: ../index.php");
                } else {
                    die("Query Failed" . mysqli_error($conn));
                }
    
            }
?>