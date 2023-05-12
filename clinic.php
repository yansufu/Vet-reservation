<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_clinic.css">
</head>
<body style="background-image: url(img/bg_clinic.png); background-repeat: no-repeat; background-attachment: fixed;">

<!------------------------NAVBAR------------------->
    <div class="navbar d-flex justify-content-center">
        <div class="mr-auto p-2" style="margin-left: 10%;">
            <a href="index.php"><img src="img/logo.png" ></a>
        </div>
        <ul class="nav">
            <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
            </li>
        </ul>
        <div class="ml-auto p-2" style="margin-right: 10%;">
            <a href=""><button class="btnregister">Register</button></a>
        </div>
    </div>

    <!-------------------FORM-------------------------->
    <div class="container justify-content-center">
    <form method="post" action="clinic.php">
        <div class="form-group">
            <label for="name">Owner Name : </label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="pet_name">Pet Name : </label>
            <input type="text" class="form-control" name="pet_name" placeholder="Enter your lovely pet name">
        </div>
        <label>and your lovely pet is a?</label><br>
        <input type="radio" id="" name="type" value="dog"> Dog <br>
        <input type="radio" id="" name="type" value="cat"> Cat<br>
        <input type="radio" id="" name="type" value="reptile"> Reptile<br>
        <input type="radio" id="" name="type" value="bird"> Bird<br>
        <input type="radio" id="" name="type" value="farm"> Farm (Home Visit)<br><br>
        <div class="form-group">
            <label for="desc">Description : </label>
            <input type="textarea" class="form-control" name="desc" placeholder="Give a brief description about your pet's current condition">
        </div>
        <div class="form-group">
            <label for="date">Reservation Date : </label>
            <input type="date" class="form-control" name="date" >
        </div>
        <div class="form-group">
            <label for="time">Reservation Time : </label>
            <input type="time" class="form-control" name="time" >
        </div>
        <div class="form-group">
            <label for="phone">Phone : </label>
            <input type="num" class="form-control" name="phone" placeholder="Enter your active phone number">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visit" value="1">
            <label class="form-check-label" for="exampleCheck1">Do you require a home visit? (there will be additional charge)</label><br><br>
        </div>
        <button type="submit" class="reserve" name="submit">Reserve</button>
        </form>
    </div>
    <?php
    include_once("config.php");
    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $pet_name = $_POST['pet_name'];
        $type = $_POST['type'];
        $desc = $_POST['desc'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        if ($_POST['visit'] == '1') {
            $visit = true;
        }else{
            $visit = false;
        }
        
        

        //update user data
        $result = mysqli_query($conn, "INSERT INTO clinic (owner, pet_name, type, description, date, time, phone, visit) VALUES ('$name', '$pet_name', '$type', '$desc', '$date', '$time', '$phone', '$visit')");

        // Redirect to hompeage
        header("location: home.php");



    }
    ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>