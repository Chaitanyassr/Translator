
<?php
$servername = "localhost";
$username = "roo";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Translator</title>
</head>
<body>
	<span>L.trans</span>
	<p>A translator that destroy barrier.</p>
	<label>English</label>
	<input for="English" name="English" placeholder="Enter the word" required>
	<button type="submit action="">translate</button>
	<label>japanease</label>
		<input for="japanease" name="japanease" placeholder="" required>

</body>
</html>