<?php

// Include database configuration file
include("db-config.php");

// Establish database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get selected capacity, catering, start date, and end date from the POST data
  $selectedCapacity = $_POST['capacity'];
  $selectedCatering = $_POST['catering'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];

  // SQL query to fetch data based on user selections
  $sqlQuery = "SELECT venue.name AS venue_name, venue.capacity, venue.weekend_price, venue.weekday_price, venue_booking.booking_date, catering.grade, venue.weekday_price AS weekdayPrice, venue.weekend_price AS weekendPrice
               FROM venue 
               INNER JOIN venue_booking ON venue.venue_id = venue_booking.venue_id 
               INNER JOIN catering ON venue.venue_id = catering.venue_id 
               WHERE venue_booking.booking_date BETWEEN '$startDate' AND '$endDate' 
               AND venue.capacity = '$selectedCapacity' 
               AND catering.grade = '$selectedCatering'";

  // Execute the query
  $result = $conn->query($sqlQuery);

  // Check if any records were found
  if ($result->num_rows > 0) {
    $rows = array(); // Initialize an array to hold the rows
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
      // Format the prices as floats
      $row['weekdayPrice'] = floatval($row['weekdayPrice']);
      $row['weekendPrice'] = floatval($row['weekendPrice']);
      $rows[] = $row; // Add each row to the array
    }
    // Set response header to JSON and echo the JSON-encoded array
    header('Content-Type: application/json');
    echo json_encode($rows);
    exit();
  } else {
    // If no matching records found, echo JSON-encoded error message
    echo json_encode(array('error' => 'No matching records found'));
    exit();
  }
}
