<?php

    $a = array("TOPS","Techno",123,123.123,true);

    //echo $a;
    print_r($a);
    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_export($a);

    // 1> numeric/ index array
    echo "<br>";
    $numeric1 = array("790"=>"TOPS","788"=>"Techno","789"=>123);
    print_r($numeric1);
    echo "<br>";

    $a = array("790"=>"TOPS","788"=>"Techno","789"=>123,"test");
    print_r($a);

     echo "<br>";
    // 2> Associative Array
    $a = array("FName"=>"TOPS","Lname"=>"Techno","Password"=>123); // keys are user defined and it's must contain alph-numeric val
	$a = array("FName"=>"TOPS","Lname"=>"Techno","Password"=>123,23.123); 

    print_r($a);

      echo "<br>";
        echo "<br>";
        
    // 3) MultiDimensional Array:
    	$a = array("SchoolName"=>array("10th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
				"11th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48)),
				"12th"=>array("Ram"=>array('Maths'=>50,'Sci'=>45,"Eng"=>49),
							 "Shyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48),
							 "Ghnshyam"=>array('Maths'=>40,'Sci'=>42,"Eng"=>48))
			  )); 

              print_r($a);

?>