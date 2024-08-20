<!-- creating an array in php -->
<?php
$a=array("mohan","ram");
echo gettype($a);
?>


<!-- Undefined variable -->
<?php
$b;
echo gettype($b);
?>

<!--  if in php -->

<?php
if(TRUE)
echo  "The cond is true";
if(FALSE)
echo "This false condition";
?>


<!-- counting the words in php -->
<?php
$c="welcome to php class,hello everyone ";
echo str_word_count($c);
?>


<!--  find the position of the word in php-->
<?php
$c=("welcome to gzb, hello ,IMS");

echo strpos($c,"gzb");
?>


<!--  reverse the string in php-->

<?php
$d="WELCOME";

echo strrev($d);
?>


<!--  defining a variable -->

<?php 
define("WISHES","Good morning tarun");
echo WISHES;

