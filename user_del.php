<?php
include_once("config.php");

if(isset($_GET['delete'])){
    $his_id = $_GET['id'];

    $del = mysqli_query($conn, "DELETE FROM users WHERE ID=$his_id");

    if ($del) {  
        header('location:user.php');  
   }
   }
   
   if(isset($_POST['edit'])){
    $usn  = $_POST['usn'];
    $email = $_POST['email'];
    
  $query = mysqli_query($conn,"UPDATE users SET username='$usn', email='$email' WHERE ID='$id'");

  if ($query) {  
    header('location:user.php');  
}}
?>