<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
h2,h1{text-align:center;
color:red;}
h1{color:green;}
</style>
</head>
<body>

<?php include("menu.php"); ?>
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "college";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"document/" . $_FILES["image"]["name"]);
			
			$location="document/" . $_FILES["image"]["name"];
			
			
			$save=mysql_query("INSERT INTO photos (College_Name,College_President_Name,Chapter_President_email,Chapter_Contact_Number,State,Boys,Girls,Accomodation,Arrival_Date,Departure_Date,Departure_Time,Doc_upload) VALUES ('$_POST[cname]','$_POST[cpname]','$_POST[cpemail]','$_POST[cpnum]','$_POST[state]','$_POST[boys]','$_POST[girls]','$_POST[accomodation]','$_POST[arrival_date]','$_POST[departure_date]','$_POST[departure_time]','$location')");
	}
				if ($conn->query($sql) === TRUE) {

    echo "<h1>Registration successful ! !</h1>";
} else {
    echo "<h2>Error: &nbsp; Email-Id Already Registered  !!</h2>";
}

$conn->close();
?>
<div style="margin-bottom:100px;">
	<?php include("footer.php"); ?>
	</div>
</body>
</html>
