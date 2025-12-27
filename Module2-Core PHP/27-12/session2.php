<?php
// Must be called before any HTML output to continue the session
session_start();
?>
<html>
<body>
    <?php
    // Echo session variables that were set on the previous page
    echo "Name is " . $_SESSION["username"] . ".<br>";
    
    ?>
    <br>
    <a href="logout.php">Log Out (Destroy Session)</a>
</body>
</html>
