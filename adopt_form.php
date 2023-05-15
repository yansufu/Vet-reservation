<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Center</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_adopt_form.css">
</head>
<body>
    <!---------------------Nav----------------------------------->
    <div class="navbar d-flex justify-content-center">
        <div class="mr-auto p-2" style="margin-left: 10%;">
            <a href="index.php"><img src="img/logo.png" ></a>
        </div>
        <ul class="nav">
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Home</a>
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
        <div class="ml-auto p-2" style="margin-right: 10%;">
            <a href=""><button class="btnregister">Register</button></a>
        </div>
    </div>

<?php
        include_once ("config.php");
        
        if(isset($_POST['submit'])){
            $pet_id = $_POST['id'];

              $query = mysqli_query($conn, "SELECT * FROM adopt_catalog WHERE ID=$pet_id");
              
              if ($query->num_rows > 0){
                while($row = mysqli_fetch_assoc($query)){
            ?>
<h4 style="margin-left:10%; font-family:georgia;"><?php echo $row['name']?> says...</h4>
<div class="tweet1">
    <img class="pfp" src="img/<?php echo $row['img'];?>" width="50px">
    <p class="usn"><b><?php echo $row['name'];?>_the <?php echo $row['type'];?></b> @<?php echo $row['name'];?></p>
    <p class="content1">I will always love you!</p>

</div>
<div class="d-flex justify-content-center" style="width:80%;margin:auto;">
    
        <form method="post" action="adopt_history.php">
            <div class="form-group">
                <label for="name">Your Name : </label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="desc">Reason to adopt <?php echo $row['name'] ?> : </label>
                <input type="textarea" class="form-control" name="desc" placeholder="Give a brief explanation why are you interested to adopt <?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone : </label>
                <input type="num" class="form-control" name="phone" placeholder="Enter your active phone number">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visit" value="1">
                <label class="form-check-label" for="exampleCheck1">Do you have another pet at home?</label><br><br>
            </div>
            <div class="form-group">
                <label for="phone">If yes then please tell us how many : </label>
                <input type="num" class="form-control" name="" placeholder="">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visit" value="1">
                <label class="form-check-label" for="exampleCheck1">Are you financially stable to take care for <?php echo $row['name']?>?</label><br><br>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visit" value="1">
                <label class="form-check-label" for="exampleCheck1">Taking care of a pet is not a simple job. You must paying attention to their physical health and also their mental state. Our adoption center also require you to took <?php echo $row['name']?> for a medical check up and new owner examination every 3 months for the first year.  Would you be able to take care of <?php echo $row['name'] ?> with your whole heart?</label><br><br>
            </div>
            <button type="submit" class="reserve" name="adopt" data-toggle="modal" data-target="#exampleModal">Schedule appointment</button>
            <input type="hidden" name="pet_name" value="<?php echo $row['name'];?>">
            <input type="hidden" name="pet_id" value="<?php echo $row["ID"];?>">
            

            <!--------------------------------MODAL----------------------->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="#exampleModalLabel">Warning!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Your reservation is complete, we are now examining your profile and you are required to visit us within 7 days for further examination. if you passed, then you can take <?php echo $row['name']?> home            <p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">I agree</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    
        
    <div>
        <img src="img/bg_adopt_form.png" style="height:696px;">
    </div>
</div>



<?php
}}}
?>
      

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>