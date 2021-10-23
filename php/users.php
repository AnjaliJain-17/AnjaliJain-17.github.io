<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitfirstdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user";
$result = $conn->query($sql);


foreach($result as $row) {
    echo '<strong>Per room amount:  </strong>'.$row['fname'];
}
?>
