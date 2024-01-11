

<?php
include("config1.php");

if(isset($_POST['complain'])){

     // Check if each key exists in $_POST before assigning values to variables

     $title = isset($_POST['title']) ? $_POST['title'] : '';
     $description = isset($_POST['description']) ? $_POST['description'] : '';

     $catagory = isset($_POST['catagory']) ? $_POST['catagory'] : '';
     $organization = isset($_POST['organization']) ? $_POST['organization'] : '';

     $location = isset($_POST['location']) ? $_POST['location'] : '';
     $anonymous = isset($_POST['anonymous']) ? $_POST['anonymous'] : '';

     $status = isset($_POST['status']) ? $_POST['status'] : '';
     $field = isset($_POST['field']) ? $_POST['field'] : '';

     $chatting = isset($_POST['chatting']) ? $_POST['chatting'] : '';
     $date = isset($_POST['date']) ? $_POST['date'] : '';


    $mysqli->query("INSERT INTO complain(title,description,catagory,organization,location,anonymous,status,field,chatting,date)
        VALUES('$title', '$description', '$catagory', '$organization', '$location','$anonymous', '$status', '$field', '$chatting', '$date')"); 
        echo"Succesfully your complain has been taken";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complain</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST">

  <label for="lname">Submit your complain here</label>

  <br><br><label for="fname">Complain Title:</label>
  <input type="text" name="title"> <br> <br>

  <label for="lname">Description:</label>
  <input type="text" name="description"> <br> <br>

  <label for="fname">Catagory:</label>
  <input type="text" name="catagory"> <br> <br>

  <label for="lname">Organization:</label>
  <input type="text" name="organization"> <br> <br>

  <label for="fname">Location:</label>
  <input type="text" name="location"> <br> <br>

  <label for="lname">Anonymous Complain:</label>
  <input type="text" name="anonymous"> <br> <br>

  <label for="fname">Status:</label>
  <input type="text" name="status"> <br> <br>

  <label for="lname">Field Officer:</label>
  <input type="text" name="field"> <br> <br>

  <label for="fname">Live Chatting:</label>
  <input type="text" name="chatting"> <br> <br>
  
  <label for="lname">Date:</label>
  <input type="text" name="date"> <br> <br>

 
  <form action="Home.php" method="POST">
  
  <button type="submit" name="complain"> Submit Complain</button> <br><br>

  </form> 

  <form action="Dashboard.php" method="POST">

  <button type="submit" name="submit2"> View old complain</button> <br><br>

  </form> 



</form>

 

</body>
</html>
