<!-- sessions are the used to mannage the information accros different web pages 
in php sessions allow you to store information in variables to be used accross multiple pages 
unlike cookies seesion data is stored on the servers reducing secuirty risk 

-->

<!-- starting the session -->
 <!--  to start a session in php you can use session_start() at the begining of the script.

   this function must be called before ant html output

    -->
 <?php
// session_start();


?>


<!-- storing a session data in $_Session in which session is active     
 
you can assign values to session values in arrays 

-->
<?php
session_start();
$_SESSION['username']="TarunChoudhary";
$_SESSION['subject']="php";
echo "your session has been started";



// <!-- once session variable are set you can access them across different pages
//   -->




//   <!-- to modify the session variable simply overwrite its value  -->
//    <!-- to remove the session varible simply use the $_SESSION_unset() function -->



$_SESSION_unset['username'];
echo "session unset successfully";


// <!-- to destory the session we use the $_SESSION_destory() function -->

$_SESSION_destory['username'];
echo "session destoryed successfully";
?>
