
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
<link rel="stylesheet" href="style.css">

<label for="fname">Dashboard</label> <br>

</body>
</html>



<?php
include("config1.php");

// Retrieve all complaints from the database
$result = $mysqli->query("SELECT * FROM complain");

if ($result->num_rows > 0) {
    // Display complaints in a table
    echo "<table>";
    echo "<tr> <th>Title</th> <th>Description</th> <th>Category</th> <th>Organization</th> <th>Status</th> <th>Anonymous</th> <th>Location</th> <th>date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        //echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['catagory'] . "</td>";
        echo "<td>" .  $row["organization"] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" .  $row["anonymous"] . "</td>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No complaints found";
}
?>


