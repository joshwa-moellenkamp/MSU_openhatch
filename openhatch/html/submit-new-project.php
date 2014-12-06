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
	$title 		 	 = "'" . $_POST["Title"] . "'";
	$org		 	 = "'" . $_POST["Organization"] . "'";
	$category 	 	 = "'" . $_POST["Category"] . "'";
	$poc 		 	 = "'" . $_POST["poc"] . "'";
	$numVolunteers	 = "'" . $_POST["numVolunteers"] . "'";
	$numVotes	 	 = "'" . $_POST["numVotes"] . "'";

	// Initialize the host
	$db_host = 'localhost';
	// Initialize the username
	$username = $_POST["Username"];
	// Initialize the password
	$password = $_POST["Password"];
	// Initialize the database to use
	$db_name = 'openhatch';
	
	// Initialize the connection
	$conn = mysqli_connect($db_host, $username, $password, $db_name);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	# Create a string representing the insert statement.
	$insert_query = "INSERT INTO projects(project_name, point_of_contact, category, volunteers, organization, votes) VALUES (" . 
						$title . "," . 
						$poc . "," . 
						$category . "," .
						$numVolunteers . "," .
						$org . "," .
						$numVotes . ")";
	
	# Run the insert statement.
	if (!mysqli_query($conn, $insert_query)) {
		echo "Error: " . mysqli_error($conn);
	} else {
		echo "Records updated successfully.";
	}
?>

<br>
<a href="projects.php">Return to Projects >></a>

</body>
</html>