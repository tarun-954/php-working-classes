<!-- Task 1:

Write a PHP program where each section has details such as a name, score, and status, you need to ensure that the formatting includes appropriate indentation for each section.

$sections is an associative array where each key represents a section (e.g., "Section A") and each value is an array containing details for that section (e.g., name, score, and status). -->


<?php
// Define the sections array
$sections = array(
    "Section A" => array("name" => "Manoj", "score" => 7.8, "status" => "Pass"),
    "Section B" => array("name" => "Priya", "score" => 6.5, "status" => "Fail"),
    "Section C" => array("name" => "Raj", "score" => 8.9, "status" => "Pass")
);

// Iterate over the sections array and format the output
foreach ($sections as $section => $details) {
    echo $section . ":\n";
    echo "    Name: " . $details['name'] . "\n";
    echo "<br>";
    echo "    Score: " . $details['score'] . "\n";
    echo "<br>";

    echo "    Status: " . $details['status'] . "\n\n";
}




// Write a PHP Program where each section includes a course name and its associated details (name and copies), you can use an associative array to store the data and then iterate over it to print each section in the required format.

// ●	$courses is an associative array where each key represents a course name (e.g., "C++", "PHP", "Laravel").
// ●	Each key maps to another associative array containing "name" and "copies" for that course.


$section=array(
"c++"=>array("tarun","copies")

)



?>

