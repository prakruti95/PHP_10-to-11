<?php

    $age = 68;

    if($age>=18)
    {
        echo "Eligible to vote";
        echo "<br>";
        if($age>=60)
        {
            echo "Senior Citizen";
        }
        else
        {
            echo "Yong Age";
        }
    }
    else
    {
        echo "Not Eligible to vote";
    }

?>