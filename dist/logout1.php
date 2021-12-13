<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: /store/index.php"); // Redirecting To Home Page
}
?>


