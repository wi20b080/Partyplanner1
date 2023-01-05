<?php
// Connect to the database
$host = "localhost";
$user = "fhtechnikum";
$password = "data1!data1!";
$dbname = "database_partyplanner";

$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$single_choice_1 = $_POST['single-choice-1'];
$dropdown = $_POST['dropdown'];
$single_choice_2 = $_POST['single-choice-2'];

// Create an INSERT query
$sql = "INSERT INTO partyplanner (firstname, attending, howMany, Drinks, lastname) VALUES ('$firstname', '$single_choice_1', '$dropdown', '$single_choice_2','$lastname')";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);