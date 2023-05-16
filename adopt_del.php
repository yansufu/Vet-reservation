<?php
include_once("config.php");

if(isset($_GET['delete'])){
    $his_id = $_GET['id'];

    $del = mysqli_query($conn, "DELETE FROM adopt_history WHERE ID=$his_id");

    if ($del) {  
        header('location:adoption_history.php');  
   }
   }


   if(isset($_POST['edit'])){
    $status        = $_POST['status'];
    $id = $_POST['id'];
    
  $query = mysqli_query($conn,"UPDATE adopt_history SET status='$status' WHERE ID='$id'");

  if ($query) {  
    header('location:adoption_history.php');  
}
      
     
    }

?>