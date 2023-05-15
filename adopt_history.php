<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Center</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_adoption.css">
</head>
<body>
    <!---------------------Nav----------------------------------->
    <div class="navbar d-flex justify-content-center">
        <div class="mr-auto p-2" style="margin-left: 10%;">
            <a href="index.php"><img src="img/logo.png" ></a>
        </div>
        <ul class="nav">
            <li class="nav-item">
            <a class="nav-link disabled" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Contact us</a>
            </li>
        </ul>

        <!---------------BODY---------------------->
        <?php

include_once("config.php");

if(isset($_POST['delete'])){
    $his_id = $_POST['id'];

    $del = mysqli_query($conn, "DELETE FROM adopt_history WHERE ID=$his_id");
   }


            if(isset($_POST['adopt'])){
                $pet_id = $_POST['pet_id'];
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $pet_name = $_POST['pet_name'];


                $insert = mysqli_query($conn, "INSERT INTO adopt_history (owner, phone, pet_name) VALUES ('$name', '$phone', '$pet_name')");
                $delete = mysqli_query($conn, "DELETE FROM adopt_catalog WHERE ID='$pet_id'");

                

                $result = mysqli_query($conn, "SELECT * FROM adopt_history");
            }
            


    if ($result->num_rows > 0){
        // Show Message
       echo    "<table class='table' border=1>";
       
       echo    "<br><br>";
       echo    "<table class='table' border=1>";
       echo    "<th class='px-2 thead-dark'>";
       echo    "<td>Owner</td>";
       echo    "<td>Phone</td>";
       echo    "<td>Pet Name</td>";
       echo    "<td>Status</td>";
       
           
       
               
       while($history = mysqli_fetch_array($result)){
        $his_id         = $history['ID'];
 
            

           echo "<tr>";
           echo "<td>".$history['ID']."</td>";
           echo "<td>".$history['owner']."</td>";
           echo "<td>".$history['phone']."</td>";
           echo "<td>".$history['pet_name']."</td>";
           echo "<td>".$history['status']."</td>";
          
?>

          <td scope="row">
            <form action="adopt_history.php">
              <button type="submit" class="btn btn-warning" name="edit">Edit</button> 
              <button type="submit" class="btn btn-danger" name="delete">Delete</button> 
              <input type="hidden" name="id" value="<?php echo $history['ID'];?>">
            </form>
          </td>
<?php
                                
           } }else{
               echo "No product found";
           }

           if(isset($_POST['delete'])){
            $his_id = $_POST['id'];

            $del = mysqli_query($conn, "DELETE FROM adopt_history WHERE ID=$his_id");
           }

?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>