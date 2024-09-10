<!-- array_chunk  -->
 <!-- splits the array into parts  -->

 <?php
$courses=array("Php","learvel","nodejs","html","css","asp.bet");

print_r(array_chunk($courses,3));


echo "<br>";

$courses=array("a"=>"Php","b"=>"learvel","c"=>"nodejs","d"=>"html","e"=>"css","f"=>"asp.bet");

print_r(array_chunk($courses,2,false));


// aarray flip makes the keys as value and values as keys
//basically flipping the values of the array with the keys 
$flippedValues=array_flip($courses);
echo"<br>";

print_r($flippedValues);

echo"<br>";
print_r(array_reverse($courses));
echo"<br>";
print_r(array_search("Php",$courses));
echo"<br>";


// slices the array 
print_r(array_slice($courses,1,3));
?>