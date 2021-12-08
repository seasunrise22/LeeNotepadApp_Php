<?php
date_default_timezone_set('Asia/Seoul');
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "leenotepadappdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$datetime = date('Y-m-d H:i:s');
$memotext = $_POST["text"];

$sql = "INSERT INTO memo_normal (inputtime, memotext)
        VALUES ('$datetime', '$memotext')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>