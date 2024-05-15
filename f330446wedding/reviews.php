<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reviews</title>
  <link rel="stylesheet" type="text/css" href="reviews.css">
  <link rel="stylesheet" type="text/css" href="aboutus.css">
</head>

<body>
  <div class="main">
    <?php include 'navbar.php'; ?> <!-- Include navbar.php -->
    <div class="title_line">
      <h1 class="title">REVIEWS</h1>
    </div>
    <!-- Chart Card -->
    <div class="chartCard">
      <!-- Chart Box -->
      <div class="chartBox">
        <!-- Canvas for Chart -->
        <canvas id="myChart" style="display:inline-flex;"></canvas>
      </div>
      <!-- Chart Description -->
      <div class="chartDescription">
        <!-- Description Message -->
        <h2> Click on the bars to find out more about the Venues</h2>
      </div>
    </div>

    <!-- Include Chart.js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <!-- Script for AJAX and Chart Rendering -->
    <script>
      // Ajax Block:
      const xmlhttp = new XMLHttpRequest();
      const url = 'reviews_data.php';

      // Make asynchronous request to reviews_data.php
      xmlhttp.open('GET', url, true);
      xmlhttp.send();

      // Handle response from reviews_data.php
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          const responseData = JSON.parse(this.responseText);
          let barClicked = false; // Flag to track if a bar has been clicked

          // Data received from reviews_data.php
          const data = {
            labels: responseData.labels,
            datasets: [{
              label: 'Average Review Score',
              data: responseData.average_scores,
              backgroundColor: 'lightgrey',
              borderColor: 'darkgrey',
              borderWidth: 1
            }]
          };

          // Chart configuration
          const config = {
            type: 'bar',
            data: data,
            options: {
              plugins: {
                tooltip: {
                  callbacks: {
                    label: function(context) {
                      var label = context.dataset.label || '';
                      if (label) {
                        label += ': ';
                      }
                      if (context.parsed.y !== null) {
                        label += 'Avg Score ' + context.parsed.y.toFixed(2);
                        label += ' | Reviews ' + responseData.number_of_reviews[context.dataIndex];
                      }
                      return label;
                    }
                  }
                }
              },
              scales: {
                y: {
                  beginAtZero: true,
                  title: {
                    display: true,
                    text: 'Average Score'
                  }
                },
                x: {
                  title: {
                    display: true,
                    text: 'Venue Name'
                  }
                }
              },
              // New code for custom hover functionality
              onClick: function(event, chartElement) {
                if (chartElement.length > 0) {
                  const dataIndex = chartElement[0].index;
                  const venueName = responseData.labels[dataIndex];
                  const chartDescription = document.querySelector('.chartDescription');

                  // If the same bar is clicked again, reset to default message
                  if (barClicked && chartDescription.innerHTML.includes(venueName)) {
                    chartDescription.innerHTML = '<h2>Click on the bars to find out more about the Venues</h2>';
                    barClicked = false;
                  } else {
                    // Update the chart description with the photo URL
                    chartDescription.innerHTML = '<h2>' + venueName + '</h2><img src="' + getPhotoUrlForVenue(venueName) + '" alt="Venue Photo">';
                    barClicked = true;
                  }
                }
              }
            }
          };

          // Render chart
          const myChart = new Chart(
            document.getElementById('myChart'),
            config
          );
        }
      }

      // Function to get photo URL based on venue name (replace this with your own logic)
      function getPhotoUrlForVenue(venueName) {
        // Example logic to get photo URL based on venue name
        if (venueName === 'Southwestern Estate') {
          return 'https://www.eternity-uk.com/wp-content/uploads/2023/08/Screenshot-2023-08-03-at-12.39.50.png';
        } else if (venueName === 'Sky Center Complex') {
          return 'https://images.bridebook.com/weddingsuppliers/venue/eenXkwy1Xx/213145c0-1921-4771-878f-36a1995a15ef.jpg?auto=format%2Ccompress%2Cenhance&ch=DPR%2CSave-Data&cs=srgb&dpr=2&crop=faces&fit=crop&w=400&h=286';
        } else if (venueName === 'Haslegrave Hotel') {
          return 'https://cdn0.weddingwire.com/article/3533/3_2/960/jpg/13353-all-inclusive-wedding-the-tudor-arms-hotel.jpeg';
        } else if (venueName === 'Forest Inn') {
          return 'https://www.forestlodgeweddings.co.uk/wpimages/wp4b7944ef_05_06.jpg';
        } else if (venueName === 'Hilltop Mansion') {
          return 'https://cdn0.hitched.co.uk/vendor/7119/3_2/960/jpg/summer-couple-2_4_197119-164848166553041.jpeg';
        } else if (venueName === 'Sea View Tavern') {
          return 'https://cdn0.hitched.co.uk/article/3471/original/1280/jpg/31743-1000_1000_scaled_2177396_the-venue-at-20190301051819182-6c67d24.jpeg';
        } else if (venueName === 'Central Plaza') {
          return 'https://hips.hearstapps.com/hmg-prod/images/hbz-nyc-wedding-venues-the-plaza-hotel-1563468550.jpg?crop=1xw:1xh;center,top&resize=980:*';
        } else if (venueName === 'Ashby Castle') {
          return 'https://www.realweddings.co.uk/media/CACHE/images/showcases/the-walled-garden-at-castle-ashby/0a0edefbf235450689640f0b6cd3822d/c8bc80bfc640ae5dfa05d67543c8101d.jpg';
        } else if (venueName === 'Fawlty Towers') {
          return 'https://cdn0.hitched.co.uk/vendor/5817/3_2/640/jpg/west-tower-20180530031746406.jpeg';
        } else if (venueName === 'Pacific Towers Hotel') {
          return 'https://staceyoliverphotography.co.uk/wp-content/uploads/2020/05/Wedding-Tower-North-Wales-10-1030x675.png';
        } else {
          return 'No Image';
        }
      }
    </script>
  </div>

  <?php include 'footer.php'; ?> <!-- Include footer.php -->

</body>

</html>