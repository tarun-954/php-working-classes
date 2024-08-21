<!-- creating an array in php -->
<?php
$a=array("mohan","ram");
echo gettype($a);
echo "<br>";
?>


<!-- Undefined variable  will give error -->
<?php
$b;
echo gettype($b);
echo "<br>";
?>

<!--  if in php -->

<?php
if(TRUE)
echo  "The cond is true";
echo "<br>";
if(FALSE)
echo "This false condition";
echo "<br>";
?>


<!-- counting the words in php -->
<?php
$c="welcome to php class,hello everyone ";
echo str_word_count($c);
echo "<br>";
?>


<!--  find the position of the word in php-->
<?php
$c=("welcome to gzb, hello ,IMS");

echo strpos($c,"gzb");
echo "<br>";
?>


<!--  reverse the string in php-->

<?php
$d="WELCOME";

echo strrev($d);
echo "<br>";
?>


<!--  defining a variable -->

<?php 
define("WISHES","Good morning tarun <br>");
echo WISHES;

?>
<!-- constants are automatically global calling constants  in function  -->

<?php 

define("TARUN","good evening tanu <br>");
function test(){
    echo TARUN;
}
test();

?>

<!-- Arthmatic operaters in php -->
<?php

$x=20;
$y=4;
echo ($x+$y);
echo "<br>";

echo ($x-$y);
echo "<br>";

echo ($x%$y);
echo "<br>";

echo ($x/$y);
echo "<br>";


echo ($x**$y);
echo "<br>";

echo ($x*$y);
?>


<!-- Assignment operater in php -->

<?php

$x=10;
$y=20;
echo ($x=$y);
echo "<br>";

echo ($x+=$y);
echo "<br>";

echo ($x-=$y);
echo "<br>";

echo ($x*=$y);
echo "<br>";


echo ($x/=$y);
echo "<br>";

echo ($x%=$y);

?>
