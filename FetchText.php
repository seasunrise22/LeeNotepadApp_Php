<?php
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

$num = $_POST["num"];
$sql = "SELECT inputtime, memotext FROM memo_normal WHERE num = $num";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $row = $result->fetch_array(MYSQLI_NUM);
  printf("%s (%s)\n", $row[0], $row[1]);
    
  
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    //echo "Datetime: " . $row["inputtime"] ."&nbsp" . "Text: " . $row["memotext"] . "<br>";
  //}
} else {
  echo "0 results";
}
$conn->close();
?>