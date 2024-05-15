<?php
// Include database configuration file
include("db-config.php");

// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Fetch data from the database
$sql = "SELECT venue_review_score.venue_id, AVG(venue_review_score.score) AS average_score, COUNT(review_id) AS number_of_reviews, venue.name
        FROM venue_review_score
        JOIN venue ON venue.venue_id = venue_review_score.venue_id
        GROUP BY venue_review_score.venue_id";

$result = mysqli_query($conn, $sql);

// Prepare data for Chart.js
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
  // Format data
  $data['labels'][] = $row['name']; // Venue names
  $data['average_scores'][] = round($row['average_score'], 2); // Round average scores to 2 decimal places
  $data['number_of_reviews'][] = $row['number_of_reviews']; // Number of reviews for each venue
}

// Close database connection
mysqli_close($conn);

// Send data as JSON response
header('Content-Type: application/json');
echo json_encode($data);
