<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Learning PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> 
     
</head>
<body>
  <h1>Create Account</h1>
  <form action="process.php" method="post">
        <p>First Name: <br> <input type="text" name="fname"> </p>
        <p>Middle Name: <br> <input type="text" name="mname"> </p>
        <p>Last Name: <br> <input type="text" name="lname"> </p>
        <p>Username: <br> <input type="text" name="username"> </p>
        <p>Password: <br> <input type="password" name="password"> </p>
        <p>Role: <br> <input type="text" name="role"> </p>
        <input name="submit"value="Register" type="submit">
    </form>
    
  <?php

  ?>
</body>
</html>