<?php
include("session.php");
$aadhar = $_POST['username'];
$subj = $_POST['email'];
if (!empty($aadhar) || !empty($subj)) {
 $host = "localhost:3308";
    $dbUsername = "mahmoud";
    $dbPassword = "2546";
    $dbname = "store";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
     $INSERT = "INSERT into sales (SDATE, SCOST, SID) values('$aadhar','$subj','$CustID')";
     mysqli_query($conn, $INSERT);
      header("location: ssales.php");
     }
    }

?>