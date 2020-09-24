<?php
$servername = "localhost";
$username = "root";
$password = "houssemkh";
$dbname = "Imgs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mywork";
$result = mysqli_query($conn, $sql);

if ($result) {
  // output data of each row
  $MyData = json_encode($result->fetch_assoc());
 echo $MyData;
} else {
  echo "0 results";
}
$conn->close();
?>