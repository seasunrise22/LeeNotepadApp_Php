<?php

// date_default_timezone_set('Asia/Seoul');
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "leenotepadappdb";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

if(isset($_POST["num"]))
{
  $num = $_POST["num"];
  echo "Set num. Num is... $num";
}
else
{
  echo "Not set num";
}

// $memotext = $_POST["text"];
// $datetime = date('Y-m-d H:i:s');
// echo "num : $num<br> 
// memotext : $memotext<br> 
// datetime : $datetime";

// $sql = "INSERT INTO memo_normal (inputtime, memotext)
//         VALUES ('$datetime', '$memotext')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>