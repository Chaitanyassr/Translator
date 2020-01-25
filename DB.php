<?php

function q($eng) {
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM translator";
$result = $conn->query($sql);
$status = "404 not found";
  while($row = $result->fetch_assoc()) {
        if (strcmp($row['english'], $eng) == 0) {
        	$status = $row['korean'];
        	break;
        }
    }
return $status;
}
?>