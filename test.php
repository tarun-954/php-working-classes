<?php
$sections=array(
"section A" => array("name"=>"manoj","cgpa"=>"7.8","result"=>"Pass"),
"section B" => array("name"=>"Aditya","cgpa"=>"8.5","result"=>"Pass"),
"section C" => array("name"=>"Anuj","cgpa"=>"4.9","result"=>"Fail"),


);
foreach ($sections as $section => $details) {
    echo $section . "<br>";
    echo "<br>";
    echo $details['name'] . "\n";

    echo "<br>";
    
    echo  "\t".$details['cgpa'] . "\n";
    echo "<br>";

    echo  "\t".$details['result'] . "\n\n";
    echo "<br><br>";
}



//Q2
echo "Question number 2 - ";
echo "<br>";
echo "<br>";


$rows=5;
for($x=1;$x<=$rows;$x++){
    for($y=1;$y<=$x;$y++){
        echo" * ";
    }
    echo"<br>";
}



?>







































