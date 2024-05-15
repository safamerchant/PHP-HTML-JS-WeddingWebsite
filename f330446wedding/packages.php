<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8"> <!-- Define character set -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Set viewport for responsive design -->
  <title>Packages</title> <!-- Title of the page -->
  <link rel="stylesheet" type="text/css" href="style.css"> <!-- Link to custom CSS file -->
  <link rel="stylesheet" type="text/css" href="packages.css"> <!-- Link to packages-specific CSS file -->
  <link rel="stylesheet" type="text/css" href="aboutus.css"> <!-- Link to about us-specific CSS file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <!-- Bootstrap CSS link -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css"> <!-- jQuery UI CSS link -->
  <!-- jQuery and other scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script> <!-- jQuery library -->
  <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script> <!-- jQuery UI library -->
  <style>
    /* Inline CSS for specific element styling */
    .search_title {
      background-image: url('packages_img.jpeg');
      /* Background image */
      background-size: cover;
      /* Cover the entire container */
      opacity: 0.7;
      /* Set opacity */
      background-position: center;
      /* Center the background image */
      height: 300px;
      /* Set height */
      position: relative;
      /* Set position relative */
    }
  </style>
</head>

<body style="background-color: #FDF4E3 !important;"> <!-- Override the body background color -->
  <div class="main">
    <div class="search_title">
    </div>
    <?php include 'navbar.php'; ?> <!-- Include navbar.php -->
    <h1 class="packages_title">PACKAGES</h1> <!-- Packages title -->
    <div class="content">
      <!-- Form for filtering data -->
      <form id="filter_form" method="POST" action="show_data.php" class="row">
        <!-- Added 'row' class to the form -->
        <div class="col-md-3">
          <!-- Specify column size for medium and larger screens -->
          <div class="form-group">
            <label control-label>Choose the capacity</label>
            <select class="form-control" name="capacity">
              <option>Select</option>
              <?php
              // PHP code for fetching and displaying capacity options
              ?>
            </select>
          </div>
        </div>
        <!-- Similar form elements for other filters -->
        <label control-label style="padding-top: 40px;"></label>
        <button id="submit">Submit</button> <!-- Submit button -->
        <!-- Table to display search results -->
        <table id="result_table" class="table" style="background-color: white; color: black; border: 1px solid darkgrey;box-shadow: 0 4px 8px #8a8888; margin: 10px;border-radius: 10px;">
          <thead style="background-color: #FDF4E3; color: darkolivegreen;">
            <!-- Table header -->
            <th style="width:15%">Venue name</th>
            <th style="width:15%">Capacity</th>
            <th style="width:15%">Catering Grade</th>
            <th style="width:15%">Booking Date</th>
            <th style="width:15%">Day Type</th>
            <th style="width:15%">Price</th>
            <th style="width:15%">Action</th> <!-- Added Action column header -->
          </thead>
          <tbody id="result">
            <!-- Table body for search results -->
          </tbody>
        </table>
      </form>
      <!-- Overlay card for displaying more information -->
      <div class="overlay-card" id="overlay-card">
        <div class="card-content">
          <!-- Modal content will be inserted here -->
          <!-- Close button -->
          <button type="button" class="btn btn-secondary close" style=" position:relative; color: darkgrey; opacity:1;">X</button>
          <!-- Package details -->
          <h2 style="justify-content:center; font-weight: 600; color: darkolivegreen; ">Package Details:</h2>
          <p>Venue: <span id="venue"></span></p>
          <p>Capacity: <span id="capacity"></span></p>
          <p>Catering Grade: <span id="grade"></span></p>
          <p>Booking Date: <span id="booking-date"></span></p>
          <p>Price: <span id="price"></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Script for initializing datepicker -->
  <script>
    $(document).ready(function() {
      // Initialize Datepicker widget for start date
      // Similar initialization for end date
    });
  </script>
  <!-- Script for handling "See More" button click -->
  <script>
    $(document).ready(function() {
      // Function to handle "See More" button click
      // Function to handle closing of the overlay card
    });
  </script>
  <!-- Script for submitting form via AJAX -->
  <script>
    $(document).ready(function() {
      // Submit form via AJAX
    });
  </script>
</body>

</html>