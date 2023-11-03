<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "webcoding";

// Attempt to establish a connection to the database
$con = mysqli_connect($server, $username, $password, $dbname);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `login`(`Name`, `Email`) VALUES ('$password', '$email')"; // Swapped $password and $email

$result = mysqli_query($con, $sql);
if ($result) {
    echo "Data submitted"; // Added a missing semicolon here
} else {
    echo "Query failed...!";
}
if ($result) {
    echo "Data submitted";
} else {
    echo "Query failed: " . mysqli_error($con);
}




?>


