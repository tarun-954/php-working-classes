<?php
$emp = array(
    array("emp1", "tcs", 123),
    array("emp2", "coginzant", 467),
    array("emp3", "infosis", 789)
);

for ($x = 0; $x < count($emp); $x++) { 
    for ($y = 0; $y < count($emp[$x]); $y++) { 
        echo $emp[$x][$y]." " ;
    
    }
    echo "<br>"; 

}

$str ="hello how, are u";
print_r(explode(" ",$str));
echo "<br>";

//dividig array with , 
print_r(explode(",",$str));



?>
