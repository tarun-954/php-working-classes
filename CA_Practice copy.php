<!-- Task 0:

Write a PHP program where each section has details such as a name, score, and status, you need to ensure that the formatting includes appropriate indentation for each section.

$sections is an associative array where each key represents a section (e.g., "Section A") and each value is an array containing details for that section (e.g., name, score, and status). -->


<?php


// $sections = array(
//     "Section A" => array("name" => "Manoj", "score" => 7.8, "status" => "Pass"),
//     "Section B" => array("name" => "Priya", "score" => 6.5, "status" => "Fail"),
//     "Section C" => array("name" => "Raj", "score" => 8.9, "status" => "Pass")
// );

// // Iterate over the sections array and format the output
// foreach ($sections as $section => $details) {
//     echo $section . ":\n";
//     echo "    Name: " . $details['name'] . "\n";
//     echo "<br>";
//     echo "    Score: " . $details['score'] . "\n";
//     echo "<br>";

//     echo "    Status: " . $details['status'] . "\n\n";
// }


// something else 

// $name=$emailErr=$genderErr=$websiteErr="";
// $name=$email=$gender=$comment=$website="";

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     if(empty($_POST["name"])){
//         $nameErr="Name is required"
//     }
// }

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     if(empty($_POST["email"])){
//         $nameErr="email is required"
//     }
// }

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     if(empty($_POST["gender"])){
//         $nameErr="gender is required"
//     }
// }
// 
// <input type="radio" name="gender" value ="femaile">female


// Write a PHP Program where each section includes a course name and its associated details (name and copies), you can use an associative array to store the data and then iterate over it to print each section in the required format.

// ●	$courses is an associative array where each key represents a course name (e.g., "C++", "PHP", "Laravel").
// ●	Each key maps to another associative array containing "name" and "copies" for that course.



// @1
// Write a Program in PHP that uses a multidimensional array to store and print information about individuals and their respective details. The array contains information in the format: [Name, Category, City].
// 
// Array Definition:
// 
// ●	$people is a multidimensional array where each sub-array contains details of a person: [Name, Category, City].
// Loop Through Array:

// ●	The foreach loop iterates through each sub-array ($person) in the $people
// array.

// Print Details:

// ●	For each person, it extracts the name, category, and city, and then prints these details.

$people=array(
["Tarun","Boss","palampur"],
["Rahul","employee","palampur"],
["tanmay","boss2","henja"],
);

foreach($people as $details){
    $name=$details[0];
    $catogery=$details[1];
    $city=$details[2];
    echo $name." " .$catogery." ".$city;
    echo "<br>";
}




echo "<br>";

$emp = array(
    ["Tarun","Boss","palampur"],
["Rahul","employee","palampur"],
["tanmay","boss2","henja"],
);

for ($x = 0; $x < count($emp); $x++) { 
    for ($y = 0; $y < count($emp[$x]); $y++) { 
        echo $emp[$x][$y]." " ;
    
    }
    echo "<br>"; 

}


// @2
// Write a PHP program that prints course names and their counts using an associative array.
// Array Definition:
// ●	The $courses associative array stores course names as keys and the number of students (or any count) as values.
// Loop Through Array:
// ●	The foreach loop iterates through each key-value pair in the $courses array.
// Print Course Details:
// ●	For each course, it prints the courseName and its count.
$courses =array(

    "Mathematice"=>30,
    "science"=>25,
    "history"=>20,
    "english"=>15,
    "computer scienve"=>42



);
echo"-------------------------------------------------------------<br>";
foreach ($courses as $details=>$values){
    print_r($details." " .$values);
    echo "<br>";
}



// @3
// Write a program in PHP that prints employee names associated with their employee IDs using an associative array:


// 1.	Array Definition:
 
// ○	The $employees associative array stores employee IDs as keys and their names as values.
// 2.	Loop Through Array:
// ○	The foreach loop iterates through each key-value pair in the $employees
// array.
// 3.	Print Employee Details:
// ○	For each employee ID, it prints the empId and the associated empName.


$employees=array(
101=>"tarun",
102=>"hello",
103=>"tanmay",
104=>"tanu",
105=>"vaishu",


);
foreach($employees as $details => $values){
print_r("ID: ".$details." Employee: ".$values);
echo"<br>";
}


//@4
// Write a PHP program that prints a list of names and their ages using the provided associative array:
// Array Definition:
// ●	The $people associative array contains names as keys and ages as values.
// HTML Structure:
// ●	The echo statements are used to generate HTML content for better formatting.
// ●	<h1> is used to display the main heading.
// ●	<ul> and <li> elements are used to create an unordered list to display each person's name and age.
// Loop Through Array:

// ●	The foreach loop iterates over the $people array.
// ●	For each iteration, it extracts the name and age and displays them within a list item


$people=array(
"tarun"=>21,
"choudhary"=>32,
"Tanmay"=>14,
"Singh"=>11,

);
foreach($people as $details => $values){
    
    print_r("<li>Name: ".$details."   Age: " .$values."</li>");
    
    echo"<br>";
}



//Q5
// PHP program that determines whether a given year is a leap year or not using if-else
// statements.
// Function Definition:
// ●	isLeapYear($year) function takes a year as input and determines if it is a leap year based on the leap year rules.
// Checking the Year:
// ●	$year variable is set to the year you want to check. You can change this value to test different years.
// ●	The if-else statement calls the isLeapYear function and prints whether the year is a leap year or not.
function CheckLeapYear($year){
    if($year%4==0 && $year%100!=0 ||($year%400==0)){
        echo "It is a leap year";

    }
    else{
        echo "It is non leap year";

    }
}
$values=2024;
$check=CheckleapYear($values);
echo $check;

echo"<br>";
echo"-------------------------------------------------------";
echo"<br>";
// Write a PHP program that uses a two-dimensional array to store data and then iterates through each element of the array to display it.

// Row number 0:
// ●	Displays the first row’s data: "Manoj", 7.8, "pass".
// Row number 1:
// ●	Displays the second row’s data: "Aditya", 8.5, "pass".
// Row number 2:
// ●	Displays the third row’s data: "Anuj", 4.9, "fail".
<?php
$sample = [
    ["Manoj", 7.8, "pass"],
    ["Aditya", 8.8, "pass"],
    ["Sam", 3.5, "fail"]
];

// Initialize a row counter
$rowNumber = 1;

// Loop through the sample array using foreach
foreach ($sample as $details) {
    // Display the row number
    echo "<h1>Row $rowNumber from here</h1>";

    // Display the details
    echo "Name: " . $details[0] . "<br>";
    echo "CGPA: " . $details[1] . "<br>";
    echo "Result: " . $details[2] . "<br>";

    // Increment the row counter
    $rowNumber++;
}
?>

?>

 












