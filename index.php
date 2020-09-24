<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
    }
    $servername = "localhost";
$username = "root";
$password = "houssemkh";
$dbname = "imgs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $sql = "CREATE DATABASE $dbname";
}


$sql = "CREATE TABLE mywork (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  imgUrl VARCHAR(1000) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
$conn->close();
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/home.php');
	exit;
?>
Something is wrong with the XAMPP installation :-(
