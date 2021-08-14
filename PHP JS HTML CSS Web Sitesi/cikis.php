<?php

session_start();  /*oturum başlar*/
$_SESSION=array();   

session_destroy();  /*oturumu sonlandırır*/
header("location:panelgiris.php");   /*direkt panele girmeye çalışanı panelgirise yönlendirir*/

?>