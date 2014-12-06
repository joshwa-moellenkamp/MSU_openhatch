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

<div id="header"> <ul>  
  <li><a class="logo" href="../index.html"><img id="logo" src="../images/open_hatch.png" alt="Open Hatch"></a><li>
  <li><a class="nav" href="../index.html">Home</a></li>
  <li><a class="nav" href="events.php">Events</a></li>
  <li><a class="nav" href="projects.php">Projects</a></li>
  <li><a id="cur" class="nav" href="volunteers.php">Volunteers</a></li>
  <li><a class="nav" href="contact.php">Contact</a></li>
  </ul> 
</div> 

<div id="content">
    <div class="clear"></div>
	<form action="submit-new-contact.php" method="POST">
		<h2>Contact Information</h2>
		<p>
			Open Hatch only requires an email address for signup,<br>
			but highly recommends a name as this will allow members<br>
			to more easily contact you.
		</p>
		<div id="element">Email:<br><input type="text" name="email"><br></id>
		<div id="element">First Name:<br><input type="text" name="name"><br></id>
		<div id="element">Last Name:<br><input type="text" name="lname"<br></id>
		<p>
		 
		</p>
		<br><input type="submit" value="Submit"></id>
		<p>
		 
		</p>
	</form>
  
</div>
    
<a href="volunteers.php"><< Return to Volunteers</a>	
	
</body>
</html>