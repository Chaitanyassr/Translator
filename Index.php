<!DOCTYPE html>
<html>
<head>
	<?php include 'DB.php';?>
	<?php include 'class.php';?>
	<title>Translator</title>
</head>
<body>
	<span>L.trans</span>
	<p>A translator that destroy barrier.</p>
	<form action="Index.php" method="POST">
	<label>English</label>
	<input for="English" name="English" placeholder="Enter the word" required>
	<button type="submit">translate</button>
</form>
	<label>Korean</label>
</body>
</html>