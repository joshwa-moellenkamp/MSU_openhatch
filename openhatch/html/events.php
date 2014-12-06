<!-- This is the source code for the Open Hatch CSCI 440 final project -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <title>Montana State Open Hatch</title>
  <link rel="shortcut icon" href="../images/open_hatch.png"/>
  <link rel="stylesheet" href="../css/events.css" type="text/css"> 
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500' rel='stylesheet' type='text/css'>
</head>

<body> 
	
<div id="header">
	<ul>    	 
	  <li><a class="logo" href="index.html"><img id="logo" src="../images/open_hatch.png" alt="Open Hatch"></a><li>
	  <li><a class="nav" href="../index.html">Home</a></li>
	  <li><a id="cur" class="nav" href="events.php">Events</a></li>
	  <li><a class="nav" href="projects.php">Projects</a></li>
	  <li><a class="nav" href="volunteers.php">Volunteers</a></li>
	  <li><a class="nav" href="contact.php">Contact</a></li>
    </ul>
</div>

<div id="content">  
  
		<h3><a id="create_new" href="new-event.php">Create New Event >></a></h3>
  
		<?php
			// Initialize the host
			$db_host = 'localhost';
			// Initialize the username
			$db_user = 'josh';
			// Initialize the password
			$db_pwd = 'mug';
			// Initialize the database to use
			$db_name = 'openhatch';

			// Initialize the connection
			$conn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			# Determine how many events are in the database, and assign numbers representing the 3 most recent.
			$num_results_sql = "SELECT e_id FROM events ORDER BY e_id DESC LIMIT 1";
			$num_query = mysqli_query($conn, $num_results_sql);
			$num1_tmp = mysqli_fetch_assoc($num_query);
			$num1 = $num1_tmp["e_id"];
			$num2 = $num1 - 1;
			$num3 = $num1 - 2;

			# Construct the sql statements for the three articles.
			$sql1 = "SELECT name, date, location, description FROM events WHERE e_id='" . $num1 . "'";
			$sql2 = "SELECT name, date, location, description FROM events WHERE e_id='" . $num2 . "'";
			$sql3 = "SELECT name, date, location, description FROM events WHERE e_id='" . $num3 . "'";
			
			# Run the sql statements from above.
			$result1 = mysqli_query($conn, $sql1);
			$result2 = mysqli_query($conn, $sql2);
			$result3 = mysqli_query($conn, $sql3);
			
			# Create an in-between layer for storing the returned arrays.
			$box1 = mysqli_fetch_assoc($result1);
			$box2 = mysqli_fetch_assoc($result2);
			$box3 = mysqli_fetch_assoc($result3);

			# Echo the HTML for event 1
			echo '<div class="box" id="event1">';
			echo "<h1>" . $box1["name"] . "</h1>";
			echo "<h2>" . $box1["location"] . ": " . substr($box1["date"], 5, 5) . ", " . substr($box1["date"], 11, 5) . "</h2>";
			echo $box1["description"];
			echo "</div>";

			# Echo the HTML for event 2
			echo '<div class="box" id="event2">';
			echo "<h1>" . $box2["name"] . "</h1>";
			echo "<h2>" . $box2["location"] . ": " . substr($box2["date"], 5, 5) . ", " . substr($box2["date"], 11, 5) . "</h2>";
			echo $box2["description"];
			echo "</div>";

			# Echo the HTML for event 3
			echo '<div class="box" id="event3">';
			echo "<h1>" . $box3["name"] . "</h1>";
			echo "<h2>" . $box3["location"] . ": " . substr($box3["date"], 5, 5) . ", " . substr($box3["date"], 11, 5) . "</h2>";
			echo $box3["description"];
			echo "</div>";

			mysqli_close($conn);
	    ?> 
  
</div>
    
</body>

</html>
