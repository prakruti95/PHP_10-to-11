<?php
$cookie_name = "user_preference";
$cookie_value = "dark_mode";
// Cookie set to expire in 1 day (86400 seconds)
setcookie($cookie_name, $cookie_value, time() + (10), "/");
?>
<html>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    // You might need to reload the page to see the value the first time.
    ?>
</body>
</html>
