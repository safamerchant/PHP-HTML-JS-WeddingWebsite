<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8"> <!-- Define character set -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport for responsive design -->
  <title>Weddings</title> <!-- Title of the page -->
  <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to custom CSS file -->
</head>

<body>
  <div class="media_nav"> <!-- Navigation section for media screens -->
    <nav>
      <img src="logo.png" class="logo" alt="Logo"> <!-- Logo image -->
      <ul class="nav-links">
        <!-- Navigation links section -->
        <!-- Bootstrap icons -->
        <div class="menu-btn-container">
          <!-- Menu button container -->
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="menu-btn" viewBox="0 0 16 16">
            <!-- Menu button -->
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
          </svg>
        </div>
        <li><a href="wedding.php">HOME</a></li> <!-- Home link -->
        <li><a href="aboutus.php">ABOUT US</a></li> <!-- About Us link -->
        <li><a href="packages.php">PACKAGES</a></li> <!-- Packages link -->
        <li><a href="reviews.php">REVIEWS</a></li> <!-- Reviews link -->
        <!-- Can also add checklist, favourites, and advice links -->
      </ul>
    </nav>
    <script src="script.js"></script> <!-- Include script file -->
    <script>
      // JavaScript function to toggle navigation
      function toggleNav() {
        var navbar = document.querySelector('.nav'); // Select navigation element
        navbar.classList.toggle('nav-open'); // Toggle 'nav-open' class
      }
    </script>
</body>

</html>