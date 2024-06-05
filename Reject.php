<?php 

session_start();
$passValueLoginPage = $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];

$conn = new mysqli('localhost', 'root', '', 'studyabroad');
if (!$conn) {
    echo 'not connect';
}

if($_GET['St_email']){
                                            
                                            
    $St_email = $_GET['St_email'];
    $jobId = $_GET['jobId'];  
  
}

$cnfrm = "Reject";

$sqlup =   "UPDATE applyjob 
SET decision='$cnfrm' WHERE applyEmail ='$St_email' AND postEmail = '$email' ";

$resultup = $conn->query($sqlup);
echo "<script>window.location.href ='applyHistory.php';</script>";


?>