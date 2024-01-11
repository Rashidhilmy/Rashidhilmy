

<?php
include("config1.php");

if(isset($_POST['submit1'])){

  if(isset($_POST['name'], $_POST['distric'], $_POST['address'], $_POST['email'], $_POST['contact'], $_POST['password'])){

    $name = $_POST['name'];
    $distric = $_POST['distric'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

  

    $mysqli->query("INSERT INTO register(Name,Distric,Address,Email,Contact,Password)
        VALUES('$name', '$distric', '$address', '$email', '$contact','$password')");
       echo"Succesfully Registerd"; 
      } else {
        echo "Please fill in all the fields.";
      }
      
}

if(isset($_POST['submit']))
  if(isset($_POST['username']) && isset($_POST['password'])){
  $name = $_POST['name'];
  $password = $_POST['password'];
  

  $mysqli->query("INSERT INTO login(username,password)
      VALUES('$name', '$password')");
      echo "You have sucessfully login";
}

if(isset($_POST['submit2'])){

  if(isset($_POST['title'], $_POST['description'], $_POST['catagory'], $_POST['organization'], $_POST['location'], $_POST['anonymous'], $_POST['status'], $_POST['field'], $_POST['chatting'], $_POST['date'])){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $catagory = $_POST['catagory'];
  $organization = $_POST['organization'];
  $location = $_POST['location'];
  $anonymous = $_POST['anonymous'];

  $status = $_POST['status'];
  $field = $_POST['field'];
  $chatting = $_POST['chatting'];
  $date = $_POST['date'];

  $mysqli->query("INSERT INTO complain(title,description,catagory,organization,location,anonymous,status,field,chatting,date)
      VALUES('$title', '$description', '$catagory', '$organization', '$location','$anonymous', '$status', '$field', '$chatting', '$date')");
      echo"Succesfully your complain has been taken"; 
    } else {
      echo "Please fill in all the fields.";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  
  <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST"> <br>

  <label for="fname">Welcome to ECC</label> <br>

  <label for="fname">Name:</label>
  <input type="text" class="form-control" name="name"><br> <br>

  <label for="lname">Distric:</label>
  <input type="text" class="form-control" name="distric"> <br> <br>

  <label for="fname">Address:</label>
  <input type="text" class="form-control" name="address"><br> <br>

  <label for="lname">Email:</label>
  <input type="text" class="form-control" name="email"> <br> <br>

  <label for="fname">Contact Number:</label>
  <input type="text" class="form-control" name="contact"><br> <br>

  <label for="lname">Password:</label>
  <input type="text" class="form-control" name="password"><br> <br>

  

    <!-- register is going to Complain Form -->
    <form action="Complain.php" method="POST">
      <button type="submit"  name="submit1"> Register</button> <br> <br>
    </form>

    <!-- Login Form -->
    <form action="login.php" method="POST">
      <button type="submit" name="submit">Login</button><br> <br>
    </form>


    <!-- Complain Form -->
    <form action="Complain.php" method="POST">
      <button type="submit" name="complain"> Anonymous Complain</button>
    </form>



</form>





</body>
</html> 