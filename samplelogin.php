
<?php
include("config1.php");

if(isset($_POST['submit3'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $mysqli->query("INSERT INTO samplelogin(username,password)
        VALUES('$name', '$password')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login1</title>
</head>
<body>

<form action="samplelogin.php" method="POST">
  <label for="fname">User name:</label><br>
  <input type="text" name="name"><br>
  <label for="lname">Password:</label><br>
  <input type="text" name="password"> <br>

  <button type="submit" name="submit3">Submit</button>
</body>
</html>