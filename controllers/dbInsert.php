<?php
require "dbConn.php";
// define variables and set to empty values
$firstName = $lastName = $email = $category = $phone =  $postcode ="";
$date = date('Y-m-d-h');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = test_input($_POST["firstName"]);
  $lastName = test_input($_POST["lastName"]);
  $email = test_input($_POST["email"]);
  $category = test_input($_POST["select"]);
  $phone = test_input($_POST["phone"]);
  $postcode = test_input($_POST["postcode"]);
}

$sql = "INSERT INTO users (catId, last_name, first_name, email, telephone, postcode, date_time)
VALUES ('$category', '$lastName', '$firstName', '$email','". $phone."', '$postcode', '$date')";

if ($conn->query($sql) === true) {
    echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
