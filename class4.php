<?php
$i=1;
while($i<5){
    echo "The number is " .$i. "<br>";
    $i++;

}
echo "<br>";

echo "-------------------------------------------------------------------------------";
echo "<br>";

//ternery operter in php
$age=54;
$i=($age<=18)? "child" : "adult" ;
echo $i;
echo "<br>";
echo "-------------------------------------------------------------------------------";
echo "<br>";

//null colicing 
$username=null;
$i=$username ?? "guest";
echo $i;
echo "<br>";
echo "-------------------------------------------------------------------------------";
echo "<br>";

//for each in php
$arr=array("tarun","choudhary","Himachal","pradesh");
foreach($arr as $val){
    echo $val;
    echo "<br>";
}

echo "<br>";
echo "-------------------------------------------------------------------------------";
echo "<br>";



//key and value in for each loop from an array 

$lpu = array("name" => "abc", "email" => "abc@gmail.com", "age" => 21);

foreach ($lpu as $key => $value) {
    // echo $key." : " ;
    
    // echo $value . "<br>";
    echo ($key ." : ". $value  ."<br>");        
}

echo "<br>";
echo "-------------------------------------------------------------------------------";
echo "<br>";


?>

