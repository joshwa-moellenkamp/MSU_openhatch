<!-- This is the source code for the Open Hatch CSCI 440 final project -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="refresh" content="events.php">
	<title>Montana State Open Hatch</title>
	<link rel="shortcut icon" href="../images/open_hatch.png"/>
	<link rel="stylesheet" href="../css/new-event.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,500' rel='stylesheet' type='text/css'>
</head>

<body> 

<div id="header">

<ul>    	 
  <li><a class="logo" href="../index.html"><img id="logo" src="../images/open_hatch.png" alt="Open Hatch"></a><li>
  <li><a  class="nav" href="../index.html">Home</a></li>
  <li><a id="cur" class="nav" href="events.php">Events</a></li>
  <li><a class="nav" href="projects.php">Projects</a></li>
  <li><a class="nav" href="volunteers.php">Volunteers</a></li>
  <li><a class="nav" href="contact.php">Contact</a></li>
    </ul>
</div>

<div id="content">  

    <div class="clear"></div>	

	<form action="submit-new-event.php" method="POST">
		<h2>New Event information</h2>
		<div id="element">Title:<br><input type="text" name="Title" size="50"><br></id>
		<div id="element">Description:<br><input type="text" name="Description" size="50" style="height:150px;"<br></id>
		<div id="element">Location:<br><input type="text" name="Location"><br></id>
		<div id="element">Time:<br><input type="text" name="Time"><br></id>
		<div id="element">Point of Contact:<br><input type="text" name="poc"><br></id>
		<div id="element">Topic:<br><input type="text" name="Topic"><br></id>
		<p>Please authenticate your credentials below to publish this event.</p>
		<div id="element">Username:<br><input type="text" name="Username"></id><br>
		<div id="element">Password:<br><input type="password" name="Password"><id><br>
		<br><input type="submit" value="Submit"></id>
	</form>
  
</div>
<p>
 
</p> 
<a href="volunteers.php"><< Return to Events</a>
	
</body>

</html>
