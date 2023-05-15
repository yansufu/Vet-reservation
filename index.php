<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Vet Reservation</title>
</head>
<body style="background-image: url(img/bg_index.png);">

<!--Nav-->
    
<div class="navbar d-flex justify-content-center">
    <div class="mr-auto p-2" style="margin-left: 10%;">
        <img src="img/logo.png" >
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
        <a href="login.php"><button class="btnregister" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Register</button></a>
    </div>
</div>

<!------------------------FORM--------------------------->


<!--Body-->
<div class="body">
    
    <div class="content">
        <h1>TREATING YOUR PET BY OUR PROFESSIONAL</h1>
        <p>A near best friend for your pet care solution. Our vet and staff are here with love and care to bring your per health and happiness! Free visit and consultation for our member. 50% discount for President University student!</p>
        <form action="home.php" method="post">
        <button type="submit" name="submit" value="<?php $id; ?>">Create Schedule</button>
        </form>
    </div>
    <div class="d-flex flex-row">
        <div class="num p-2">
            <h5>85K+</h5>
            <p class="letter">Client</p>
        </div>
        <div class="num p-2">
            <h5>20+</h5>
            <p class="letter">Employee</p>
        </div>
        <div class="num p-2">
            <h5>99%</h5>
            <p class="letter">Protection</p>
        </div>
      </div>
</div>
  


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>