<?php
$server = "localhost";
$username = "root";
// Set the password accordingly (empty for default, or your set password)
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Success connecting to the db";

// Data execution
$name = $_POST['name'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];
$Phone = $_POST['Phone']; // Corrected typo
$Course = $_POST['Course']; // Corrected typo

$desp = $_POST['desp'];

$sql = "INSERT INTO `trip` ( `name`, `Age`, `Gender`, `Phone`, `Course`, `desp`, `date/time`) VALUES ( '$name', '$Age', '$Gender', '$Phone', '$Course', '$desp', current_timestamp());";

?>
