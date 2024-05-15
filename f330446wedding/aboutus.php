<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8"> <!-- Define character set -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport for responsive design -->
  <title>About Us</title> <!-- Title of the page -->
  <link rel="stylesheet" type="text/css" href="aboutus.css"> <!-- Link to custom CSS file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap CSS link -->
</head>

<body>
  <div class="main">
    <?php include 'navbar.php'; ?> <!-- Include navbar.php -->
    <div class="title_line">
      <h1 class="title">OUR JOURNEY</h1> <!-- Main title -->
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-6"> <!-- Left column for carousel -->
          <div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel">
            <ol class="carousel-indicators"> <!-- Indicators for carousel -->
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner"> <!-- Images for carousel -->
              <div class="carousel-item active">
                <img class="d-block w-100 custom-img" src="couple1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 custom-img" src="couple2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 custom-img" src="couple3.jpg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 custom-img" src="couple4.jpg" alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 custom-img" src="couple5.jpg" alt="Fifth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span> <!-- Previous control -->
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span> <!-- Next control -->
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 text-section"> <!-- Right column for text section -->
          <p>
            Our company is dedicated to making your special day truly unforgettable. With a commitment to excellence and attention to detail, we ensure that every aspect of your wedding is meticulously planned and executed. From the moment you
            contact us to the last dance of the evening, we are here to exceed your expectations and create memories that will last a lifetime. Let's embark on this beautiful journey together.
          </p>
          <div class="button"> <!-- Button to reserve date -->
            <a href="packages.php">RESERVE YOUR DATE</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript links -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<?php include 'footer.php'; ?> <!-- Include footer.php -->

</html>