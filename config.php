<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "account";

$con = mysqli_connect("$host", "$username", "$password", "$database");
if ($con->connect_error) {
    die("Connection failed". $con->connect_error);
}
echo "";
?>