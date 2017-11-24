<?php
$servername = "localhost";
$username = "u599536700_ashis";
$password = "009inspired";
$dbname = "u599536700_coleg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,College_Name,College_President_Name,Chapter_President_email,Chapter_Contact_Number,State,Boys,Girls,Accomodation,Arrival_Date,Departure_Date,Departure_Time,Doc_upload FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>College Name</th><th>College_President_Name</th><th>Email</th><th>Contact</th><th>State</th><th>Boys</th><th>Girls</th><th>Accomodation</th><th>Arrival</th><th>Departure</th><th>Departure</th><th>Document/upload</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
		echo "<tr><td>".$row["id"]."</td><td>".$row["College_Name"]."</td><td>" .$row["College_President_Name"]."</td><td>".$row["Chapter_President_email"]."</td><td>".$row["Chapter_Contact_Number"]."</td><td>".$row["State"]."</td><td>".$row["Boys"]."</td><td>".$row["Girls"]."</td><td>".$row["Accomodation"]."</td><td>".$row["Arrival_Date"]."</td><td>".$row["Departure_Date"]."</td><td>".$row["Departure_Time"]."</td><td>".$row["Doc_upload"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>