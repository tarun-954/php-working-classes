<!--  sessions are the used to mannage the information accros different web pages 
in php sessions allow you to store information in variables to be used accross multiple pages 
unlike cookies seesion data is stored on the servers reducing secuirty risk 

-->

<!-- starting the session -->
 <!--  to start a session in php you can use session_start() at the begining of the script.

   this function must be called before ant html output

    -->

<!-- session_start(); -->





<!-- storing a session data in $_Session in which session is active     
 
you can assign values to session values in arrays 


// session_start();
// $_SESSION['username']="TarunChoudhary";
// $_SESSION['category']="php";
// echo "your session has been started";
 


//  once session variable are set you can access them across different pages
//   -->




   <!-- to modify the session variable simply overwrite its value  -->
   <!-- to remove the session varible simply use the $_SESSION_unset() function -->



<!-- // unset($_SESSION['username']); -->
<!-- // echo "Session 'username' unset successfully.<br>"; -->


 <!-- to destory the session we use the $_SESSION_destory() function -->

<!-- // session_destroy();
// echo "Session destroyed successfully.<br>";

// // session_start();
// $email=$_SESSION["email"]="tarunchoudhary@gmail.com";
// echo $email; -->





<?php

session_start();

// Store session variables
$_SESSION['username'] = "TarunChoudhary";
$_SESSION['category'] = "php";
echo "Your session has been started.<br>";

// Display the session variable
echo "Username: " . $_SESSION['username'] . "<br>";

// Unset a specific session variable
unset($_SESSION['username']);
echo "Session 'username' unset successfully.<br>";

// Destroy the session
session_destroy();
echo "Session destroyed successfully.<br>";

// Trying to set another session variable after the session is destroyed
// This won't work as expected, since the session is destroyed
// session_start();  // Uncomment this if you want to restart the session
$email = $_SESSION["email"] = "tarunchoudhary@gmail.com";
echo $email;

?>


for example filter