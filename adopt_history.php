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
    <div class="navbar d-flex justify-content-center align-middle">
        <div class="mr-auto p-2" style="margin-left: 10%;">
            <a href="index.php"><img src="img/logo.png" ></a>
        </div>
        <ul class="nav align-middle">
            <li class="nav-item">
            <a class="nav-link disabled" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">About us</a>
            </li>
            <li class="nav-item">
            <div class="dropdown">
            <button class="nav-link dropdown-toggle" style="background-color:transparent; border:none !important;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Service
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="clinic_history.php">Clinic reservation history</a>
              <a class="dropdown-item" href="adopt_history.php">Adoption history</a>
              <a class="dropdown-item" href="user.php">See user</a>
            </div>
          </div>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Contact us</a>
            </li>
        </ul>
        <div class="ml-auto p-2" style="margin-right: 10%;">
            <a href="login.php"><button class="btnregister">Register</button></a>
        </div>
    </div>
        <!---------------BODY---------------------->
        <?php
        include_once("config.php");
        $sql2   = "SELECT * FROM adopt_history";
        $q2     = mysqli_query($conn, $sql2);
        while ($adopt = mysqli_fetch_array($q2)) {
            $id         = $adopt['ID'];
            $owner        = $adopt['owner'];
            $pet_name       = $adopt['pet_name'];
            $phone         = $adopt['phone'];
            $status         = $adopt['status'];


                     
            


    if ($q2->num_rows > 0){
        // Show Message
       echo    "<table class='table' border=1>";
       
       echo    "<br><br>";
       echo    "<table class='table' border=1>";
       echo    "<th class='px-2 thead-dark'>";
       echo    "<td>Owner</td>";
       echo    "<td>Phone</td>";
       echo    "<td>Pet Name</td>";
       echo    "<td>Status</td>";
       
           
       
            
          
?>
<tr>
                                <th scope="row"><?php echo $id ?></th>
                                <td scope="row"><?php echo $owner ?></td>
                                <td scope="row"><?php echo $phone ?></td>
                                <th scope="row"><?php echo $pet_name ?></th>
                                <td scope="row"><?php echo $status ?></td>
                        
                                <?php  ?>
                            

          <td scope="row">
          <form action="adopt_del.php" method="get"> 
              <button type="submit" class="btn btn-danger" name="delete">Delete</button> 
              <input type="hidden" name="id" value="<?php echo $adopt['ID'];?>">
            </form>
          <button class="btn btn-warning" type="button" name="edit" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="adopt_del.php" >
          <div class="form-group">
            <label for="status" class="col-form-label">status :</label>
            <input type="text" class="form-control" name="status">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="edit" value="complete">Update</button>
            <input type="hidden" name="id" value="<?php echo $adopt['ID'];?>">
          </div>
        </form>
              
              
           
            <form action="adopt_del.php" method="get"> 
              <button type="submit" class="btn btn-danger" name="delete">Delete</button> 
              <input type="hidden" name="id" value="<?php echo $adopt['ID'];?>">
            </form>

          </td></tr>
<?php
                                
           } }
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