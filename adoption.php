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

<!-----------------------------FORM----------------------------->
        <div class="ml-auto p-2" style="margin-right: 10%;">
        
            <button class="btnregister" type="button" name="submit" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add new pet</button>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New sweet pet ready for adoption!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="adoption.php"  enctype="multipart/form-data">
          <div class="form-group">
            <label for="pet_name" class="col-form-label">Name :</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="pet_type" class="col-form-label">Type :</label>
            <input type="text" class="form-control" name="type">
          </div>
          <div class="form-group">
            <label for="pet_age" class="col-form-label">Age :</label>
            <input type="text" class="form-control" name="age">
          </div>
          <div class="pet_birth">
            <label for="recipient-name" class="col-form-label">Birth :</label>
            <input type="date" class="form-control" name="birth">
          </div>
          <div class="form-group">
            <label for="pet_disease" class="col-form-label">Disease History :</label>
            <textarea class="form-control" name="disease"></textarea>
          </div>
          <div class="form-group">
            <label for="my_image" class="col-form-label">Photo :</label>
            <input type="file" name="my_image" accept=".jpg, .jpeg, .png" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit" value="add">Add</button>
          </div>
        </form>
        <?php
        include_once ("config.php");
        
        if(isset($_POST['submit'])){
            $pet_name        = $_POST['name'];
            $pet_type        = $_POST['type'];
            $pet_age       = $_POST['age'];
            $pet_birth       = $_POST['birth'];
            $pet_disease       = $_POST['disease'];
            $img_name = $_FILES["my_image"]['name'];
            $tmp_name = $_FILES["my_image"]['tmp_name'];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = 'img/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
          
              
              $query = mysqli_query($conn, "INSERT INTO adopt_catalog (name, type, age, birth, disease, img) VALUES('$pet_name', '$pet_type', '$pet_age', '$pet_birth', '$pet_disease', '$new_img_name')");
              
              echo
              "
              Successfully Added
              ";
            }
          
        
        ?>
      </div>

    </div>
  </div>
</div>


            
        </div>
    </div>    

    <!-------------------------------Body------------------------->
    <?php

        
    
                        include_once ("config.php");
                        $q2     = mysqli_query($conn, "SELECT * from adopt_catalog");
                        

                        
                        if ($q2->num_rows > 0){
                            while($row = mysqli_fetch_assoc($q2)){
                        ?>
      <div class="d-flex justify-content-center" style="">
          <div class="side_div">          
              <div class="card" style="width: 18rem;">
              <form action="adopt_form.php" method="post">
                <img class="card-img-top" src="img/<?php echo $row['img'];?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name'];?></h5>
                  <p class="card-text">Age : <?php echo $row['age'];?></</p>
                  <p class="card-text">Birthday : <?php echo $row['birth'];?></</p>
                  <p class="card-text">Disease history : <?php echo $row['disease'];?></</p>
                  <button style="color;white;" type="submit" name="submit" class="btn_adopt">ADOPT!</button>
                  <input type="hidden" value="<?php echo $row['ID'];?>" name="id">
                </div>
              </form>
              </div>
          </div>
        <?php
        }}
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