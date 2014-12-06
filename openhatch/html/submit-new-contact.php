<!-- This is the source code for the Open Hatch CSCI 440 final project -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<title>Montana State Open Hatch</title>
	<link rel="shortcut icon" href="../images/open_hatch.png"/>
	<link rel="stylesheet" href="../css/new-event.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500' rel='stylesheet' type='text/css'>
</head>

<body>

<?php
	
	// Initialize the variables gathered from the HTML form.
	$email 		 	 = "'" . $_POST["email"] . "'";
	$lname		 	 = "'" . $_POST["lname"] . "'";
	$name	 	 	 = "'" . $_POST["name"] . "'";

	// Initialize the host
	$db_host = 'localhost';
	// Initialize the username
	$username = 'josh';
	// Initialize the password
	$password = 'mug'
	// Initialize the database to use
	$db_name = 'openhatch';
	
	// Initialize the connection
	$conn = mysqli_connect($db_host, $username, $password, $db_name);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	# Create a string representing the insert statement.
	$insert_query = "INSERT INTO people(lname, name, email) VALUES (" .
						$lname . "," . 
						$name  . "," . 
						$email . ")";
	
	# Run the insert statement.
	if (!mysqli_query($conn, $insert_query)) {
		echo "Error: " . mysqli_error($conn);
	} else {
		echo "Records updated successfully.";
	}
?>

<a href="projects.php">Return to Projects >></a>

</body>
</html>