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
        <form method="post" action="adoption.php">
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
            <label for="img" class="col-form-label">Photo :</label>
            <input type="file" name="img" accept=".jpg, .jpeg, .png" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit" value="add">Add</button>
          </div>
        </form>
        <?php
        
        if(isset($_POST['submit'])){
            $pet_name        = $_POST['name'];
            $pet_type        = $_POST['type'];
            $pet_age       = $_POST['age'];
            $pet_birth       = $_POST['birth'];
            $pet_disease       = $_POST['disease'];
            $pet_img       = $_POST['img'];
          
              include_once ("config.php");
              $query = mysqli_query($conn, "INSERT INTO adopt_catalog (name, type, age, birth, disease, img) VALUES('$pet_name', '$pet_type', '$pet_age', '$pet_birth', '$pet_disease', '$pet_img')");
              
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
      <div class="d-flex justify-content-center">
          <div class="side_div">          
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name'];?></h5>
                  <p class="card-text">Age : <?php echo $row['age'];?></</p>
                  <p class="card-text">Birthday : <?php echo $row['birth'];?></</p>
                  <p class="card-text">Disease history : <?php echo $row['disease'];?></</p>
                  <a href="#" class="btn_adopt">ADOPT!</a>
                </div>
              </div>
          </div>
        <?php
        }}
        ?>
        

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>