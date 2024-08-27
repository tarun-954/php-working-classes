<?php
$i=1;
while($i<5){
    echo "The number is " .$i. "<br>";
    $i++;

}

//ternery operter in php
$age=54;
$i=($age<=18)? "child" : "adult" ;
echo $i;
echo "<br>";


//null colicing 
$username=null;
$i=$username ?? "guest";
echo $i;
?>