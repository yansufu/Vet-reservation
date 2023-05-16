<?php
include_once("config.php");

if(isset($_GET['delete'])){
    $his_id = $_GET['id'];

    $del = mysqli_query($conn, "DELETE FROM clinic WHERE ID=$his_id");

    if ($del) {  
        header('location:clinic_history.php');  
   }
   }

   if(isset($_POST['edit'])){
    $owner        = $_POST['owner'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $desc = $_POST['desc'];
    $phone = $_POST['phone'];
    
  $query = mysqli_query($conn,"UPDATE clinic SET owner='$owner', pet_name='$name', type='$type', description='$desc', phone='$phone' WHERE ID='$id'");

  if ($query) {  
    header('location:clinic_history.php');  
}
      
     
    }

?>