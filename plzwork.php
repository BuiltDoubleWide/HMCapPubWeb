
<?php
$servername = "192.168.18.5";
$username = "SA";
$password = "HMCap23!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>