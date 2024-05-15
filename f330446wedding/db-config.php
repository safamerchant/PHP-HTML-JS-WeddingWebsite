  <?php
  $servername = "sci-mysql.lboro.ac.uk";
  $username = "coa123wuser";
  $password = "grt64dkh!@2FD";
  $dbname = "coa123wdb";

  // Create connection ERROR MADE BELOW:
  // Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // } else {
  //   echo "Connection successful";
  // }

  // // SQL query to select data from the venue table
  // $venueQuery = "SELECT * FROM venue";

  // // Execute the query
  // $venueResult = $conn->query($venueQuery);

  // // Check if there are any results
  // if ($venueResult->num_rows > 0) {
  //   // Output table header
  //   echo "<h2>Venue Table</h2>";
  //   echo "<table border='1'><tr><th>Venue ID</th><th>Name</th><th>Location</th><th>Weekday Price (£)</th><th>Weekend Price (£)</th></tr>";

  //   // Output data of each row
  //   while ($row = $venueResult->fetch_assoc()) {
  //     echo "<tr><td>" . $row["venue_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["location"] . "</td><td>" . $row["weekday_price"] . "</td><td>" . $row["weekend_price"] . "</td></tr>";
  //   }
  //   echo "</table>";
  // } else {
  //   echo "0 results";
  // }

  // // Close connection
  // $conn->close();
  ?>