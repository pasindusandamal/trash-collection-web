<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the SQL SELECT statement
$sql = "SELECT * FROM garbage_reports";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Display the data on the page using HTML
        echo "Reporter Name: " . $row["reporter_name"] . "<br>";
        echo "Report Date: " . $row["report_date"] . "<br>";
        echo "Report Time: " . $row["report_time"] . "<br>";
        echo "Nearest City: " . $row["nearest_city"] . "<br>";
        echo "District: " . $row["district"] . "<br>";
        echo "Garbage Type: " . $row["garbage_type"] . "<br>";
        echo "Priority Level: " . $row["priority_level"] . "<br>";
        echo "Garbage Location: " . $row["garbage_location"] . "<br>";
        echo "Garbage Image: <img src='uploads/" . $row["garbage_image"] . "'><br><br>";
        echo "<div id='map' style='height:400px;width:100%;'></div>";

        // Get the latitude and longitude of the garbage location from the database
        $location = $row["garbage_location"];
        $location_parts = explode(",", $location);
        $latitude = trim($location_parts[0]);
        $longitude = trim($location_parts[1]);

        // Output the Bing Map JavaScript
        echo "<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?key=Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'></script>
              <script type='text/javascript'>
                var map = new Microsoft.Maps.Map('#map', {
                  credentials: 'Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'
                });
                var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(" . $latitude . ", " . $longitude . "));
                map.entities.push(pushpin);
                map.setView({ center: new Microsoft.Maps.Location(" . $latitude . ", " . $longitude . "), zoom: 15 });

                // Add click event listener to the pushpin
                Microsoft.Maps.Events.addHandler(pushpin, 'click', function (e) {
                  // Display the reporter name in an alert box
                  alert('Reporter Name: " . $row["reporter_name"] . "');
                });
              </script><br><br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
