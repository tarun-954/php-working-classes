<?php
//get is less secure than post 
// if ($_GET) {
//     echo "Username is " . $_GET['username'];  
//     echo "<br>";
//     echo "Password is " . $_GET['password'];    
// }




//post is more secure 
// hide details on the url and make it more squre 
if ($_POST) {
        echo "Username is " . $_POST['username'];  
        echo "<br>";
        echo "Password is " . $_POST['password'];    
    }
?>
