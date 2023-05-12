<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_home.css">
</head>
<body>
    <!-----------------Navbar-------------------->
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

    <!------------Carousel-------------------------->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="clinic.php"><img class="d-block w-100" src="img/clinic carousel.png" alt="First slide"></a>
            <div class="carousel-caption d-none d-md-block">
                <a href="" class="link"><h1>Clinic</h1></a>
                <a><p>...</p></a>
            </div>
          </div>
          <div class="carousel-item">
            <a href="adoption.html"><img class="d-block w-100" src="img/Adoption carousel.png" alt="Second slide"></a>
            <div class="carousel-caption d-none d-md-block">
                <a href="adoption.php"><h1>Adoption</h1></a>
                <a><p>...</p></a>
            </div>
          </div>
          <div class="carousel-item">
            <a></a><img class="d-block w-100" src="img/Pet hotel carousel.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <a></a><h1>Pet Hotel</h1>
                <a><p>...</p></a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!------------------------Footer---------------------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>