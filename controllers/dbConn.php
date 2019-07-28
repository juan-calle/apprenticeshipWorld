<?php
  // Connection Mysqli with database

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "apprenticeships";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM categories";
  $result = $conn->query($sql);
?>
