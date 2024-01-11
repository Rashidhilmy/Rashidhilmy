
<?php
include("config1.php");

if(isset($_POST['login'])){ 
  if(isset($_POST['name']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $password = $_POST['password'];



    $mysqli->query("INSERT INTO login(username,password)
    VALUES('$name', '$password')");
    echo "You have sucessfully login";

  } else{
    echo "Please provide both username and password!";
  }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>

  <link rel="stylesheet" href="style.css">
  
</head>
<body>

<form action="Login.php" method="POST">


  

</form>

  <!-- Login Form -->
<form action="login.php" method="POST">

  <label for="fname">Login here to submit compain</label> <br> <br>

  <label for="fname">User name:</label>
  <input type="text" name="name"> <br> <br>

  <label for="lname">Password:</label>
  <input type="text" name="password"> <br><br>
 
  <button type="submit" name="login">Login</button> <br><br>
  
</form>




<!-- Complain Form -->

<form action="Complain.php" method="POST">
 
<button type="submit" name="submit2"> Anonymous Compain</button>

</form>

</body>
</html>