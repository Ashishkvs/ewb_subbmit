
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EWB Annual Meet</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	
    
</head>
<body>
<?php include("menu.php"); ?>
  
   		<div id="content">
			<div id="home">
				
			
    <div>
    <br />
    <h1> REGISTRATION</h1>
    <br />
    <p>Enter the following information and click on <b>SUBMIT</b> button to register.<p> <br />
       
   <form method="POST" action="submit.php" enctype="multipart/form-data" id="form1">
   <table id="table1">
    <tr>
	<td>College Name:</td>
	<td><input type="text" name="cname" required autofocus></td>
	</tr>

	<tr>
	<td>College President Name:</td>
	<td><input type="text" name="cpname" required></td>
	</tr>
	<tr>
	<td>Chapter President email:</td>
	<td><input type="email" name="cpemail" required></td>
	</tr>
	<tr>
	<td>Chapter Contact Number:</td>
	<td><input type="num" name="cpnum" required value="+91"></td>
	</tr><tr>
	<td>State:</td>
	<td><input type="text" name="state" required></td>
	</tr>
	<tr>
	<td>Number Of Boys:</td>
	<td><input type="number" name="boys" required></td>
	</tr>
	<tr>
	<td>Number Of Girls:</td>
	<td><input type="number" name="girls" required></td>
	</tr>
	<tr>
	<td>Accomodation Needed?</td>
	<td>
	<input type="radio" name="accomodation" value="Yes" required>Yes

<input type="radio" name="accomodation" value="No" required>No
	</td>
 	</tr>
	<tr>
	<td>Arrival Date:</td>
	<td><input type="date" name="arrival_date" required></td>
	</tr><tr>
	<td>Departure Date:</td>
	<td><input type="date" name="departure_date" required></td>
	</tr>
	<tr>
	<td>Departure Time:</td>
	<td><input type="time" name="departure_time"></td>
	</tr>
	<tr>
	<td>List of Students</td>
	<td><input type="file" name="image" class="ed" required>*Only Doc File</td>
	</tr>
    </table>
			<center><input type="submit" value="Submit" id="submit"></center>
   </form>
   </div>

			</div>
		</div>
		<?php include("footer.php"); ?>


</body>
</html>
