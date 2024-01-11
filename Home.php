<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <form method="POST"> <br>

    <label for="fname">Welcome to ECC</label> <br>

  </form>

  <link rel="stylesheet" href="style.css">
  <img src="OIP.jpeg" alt="">
</head>

<body>

    <!-- register is going to Complain Form -->
    <br><br>
  <form action="Register.php" method="POST">
  
    <button type="submit"  name="submit1"> Register</button> <br> <br>
  </form>

    <!-- Login Form -->
    <form action="login.php" method="POST">

      <button type="submit" name="submit">Login</button><br> <br>
    </form>


    <!-- Complain Form -->
    <form action="Complain.php" method="POST">

      <button type="submit" name="submit2"> Anonymous Complain</button> <br> <br> 
    
    </form>

    <form action="Dashboard.php" method="POST">
  
      <button type="submit" name="submit2"> View old complain</button> <br><br>

    </form> 

  




</body>
</html> 