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

// Execute the SQL SELECT statement to get the location data
$sql = "SELECT garbage_location, reporter_name FROM garbage_reports";
$result = mysqli_query($conn, $sql);

// Create an array to store the latitude, longitude, and reporter name of each location
$locations = array();

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
  // Loop through each row and store the location in the array
  while ($row = mysqli_fetch_assoc($result)) {
    $location = $row["garbage_location"];
    $location_parts = explode(",", $location);
    $latitude = trim($location_parts[0]);
    $longitude = trim($location_parts[1]);
    $reporter_name = $row["reporter_name"];
    $locations[] = array("latitude" => $latitude, "longitude" => $longitude, "reporter_name" => $reporter_name);
  }
}

mysqli_close($conn);
?>

<!-- Display the Bing Map on the page using JavaScript -->
<div id='map' style='height:900px;width:82%; margin-left:300px; '></div>
<script type='text/javascript'
    src='http://www.bing.com/api/maps/mapcontrol?key=Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'>
</script>
<script type='text/javascript'>
var map = new Microsoft.Maps.Map('#map', {
    credentials: 'Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'
});

// Loop through the locations array and create a pushpin for each location
<?php foreach ($locations as $location): ?>
var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(<?php echo $location["latitude"] ?>,
    <?php echo $location["longitude"] ?>));

// Add an event listener to the pushpin to show a pop-up menu when clicked
Microsoft.Maps.Events.addHandler(pushpin, 'click', function(e) {
    var menu = new Microsoft.Maps.Infobox(e.target.getLocation(), {
        title: '<?php echo $location["reporter_name"] ?>'
    });
    menu.setMap(map);
});

map.entities.push(pushpin);
<?php endforeach; ?>

// Set the map view to show all the pushpins
map.setView({
    bounds: Microsoft.Maps.LocationRect.fromLocations(
        <?php foreach ($locations as $location): ?> new Microsoft.Maps.Location(
            <?php echo $location["latitude"] ?>, <?php echo $location["longitude"] ?>),
        <?php endforeach; ?>
    )
});
</script>



<table style="margin-top:-900px; height:100px; width:200px;">
    <tr>
        <td>
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

        // Select data from the database
        $sql = "SELECT * FROM garbage_reports";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // Output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            echo "Nearest City : " . $row["nearest_city"] . "<br>";
            echo "Priority Level : " . $row["priority_level"] . "<br>";
                      echo '<img src="uploads/' . $row["garbage_image"] . '" alt="Garbage Image" width="50" height="50">' . "<br>";
            echo "<hr>";
          }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);

        ?>
        </td>
        <td></td>
    </tr>
</table>