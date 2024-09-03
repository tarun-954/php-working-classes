<?php

// $sub=array("php","html","webtech");
// foreach($sub as $value){
//     echo $value;
//     echo "<br>";
// }
$arr2=array("tarun","hwllo","buddy");
echo "<pre>";
print_r($arr2);
// echo "<br>";
echo "</pre>";

$subject =array(42,54,46,75,34,75);


//array with index yh
for($x=0;$x<=4;$x++){

    echo $subject[$x]."<br>";

}

$courses=array("php","larvel","nodejs");
$length=count($courses);
for($x=0;$x<$length;$x++){
    echo $courses[$x]." ";

}

$university=array(
    array("a","lpu","45"),
    array("a","lpu","45"),
    array("a","lpu","45"));

echo "<pre>";
print_r($university);
echo "</pre>";
?>